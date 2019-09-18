<?php
//require('fpdf/fpdf.php');
//include ('texto.php');


//function hex2dec
//returns an associative array (keys: R,G,B) from
//a hex html code (e.g. #3FE5AA)
function hex2dec($couleur = "#000000"){
    $R = substr($couleur, 1, 2);
    $rouge = hexdec($R);
    $V = substr($couleur, 3, 2);
    $vert = hexdec($V);
    $B = substr($couleur, 5, 2);
    $bleu = hexdec($B);
    $tbl_couleur = array();
    $tbl_couleur['R']=$rouge;
    $tbl_couleur['G']=$vert;
    $tbl_couleur['B']=$bleu;
    return $tbl_couleur;
}

//conversion pixel -> millimeter in 72 dpi
function px2mm($px){
    return $px*25.4/72;
}

function txtentities($html){
    $trans = get_html_translation_table(HTML_ENTITIES);
    $trans = array_flip($trans);
    return strtr($html, $trans);
}
////////////////////////////////////




class PDFGenerator extends FPDF
{

    // Page header
    function Header()
    {
        // Sets Header only on first page
        if ($this->page == 1)
        {
            // Logo
            $this->Image('img/sinte1.jpg', 0, 0, $this->w, $this->h);
            $this->Image('img/logo.png',165,17,30); // Image("file.ext", margin-left, margin-top, width)
            // Line break
            $this->Ln(36);
            //$pdf->centreImage("logo.gif");
            // Arial bold 15
            $this->SetFont('Arial','B',15);
            // Move to the right
            $this->Cell(80);
            // Title
            //$this->Cell(30,7,'MINISTÉRIO DA DEFESA',0,2,'C');
            //$this->SetFont('Arial','',15);
            //$this->Cell(30,7,'COMANDO DA AERONÁUTICA',0,2,'C');
            //$this->Cell(30,7,'II COMANDO AÉREO REGIONAL',0,2,'C');
            //$this->SetFont('Arial','U',15);
            //$this->Cell(30,7,'BASE AÉREA DO RECIFE',0,2,'C');
            
            // Line break
            $this->Ln(0);
        }
    }

    // Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Page number
        //$this->Cell(0,10,'Página '.$this->PageNo().'/{nb}',0,0,'C');
    }

///////////////////////////////////
///////////////////////////////////
///////////////////////////////////
///////////////////////////////////
    var $widths;
    var $aligns;

    function SetWidths($w)
    {
        //Set the array of column widths
        $this->widths[]=$w;
    }

    function SetAligns($a)
    {
        //Set the array of column alignments
        $this->aligns=$a;
    }

    function Row($data)
    {
        //Calculate the height of the row
        $nb=0;
        for($i=0;$i<count($data);$i++)
            $nb=max($nb,$this->NbLines($this->widths[0],$data[$i]));
        $h=5*$nb;
        //Issue a page break first if needed
        $this->CheckPageBreak($h);
        //Draw the cells of the row
        for($i=0;$i<count($data);$i++)
        {
            $w=$this->widths[0];
            $a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
            //Save the current position
            $x=$this->GetX();
            $y=$this->GetY();
            //Draw the border
            $this->Rect($x,$y,$w,$h);
            //Print the text
            $this->MultiCell($w,5,$data[$i],0,$a);
            //Put the position to the right of the cell
            $this->SetXY($x+$w,$y);
        }
        //Go to the next line
        $this->Ln($h);
    }

    function CheckPageBreak($h)
    {
        //If the height h would cause an overflow, add a new page immediately
        if($this->GetY()+$h>$this->PageBreakTrigger)
            $this->AddPage($this->CurOrientation);
    }

    function NbLines($w,$txt)
    {
        //Computes the number of lines a MultiCell of width w will take
        $cw=&$this->CurrentFont['cw'];
        if($w==0)
            $w=$this->w-$this->rMargin-$this->x;
        $wmax=($w-2*$this->cMargin)*1000/$this->FontSize;
        $s=str_replace("\r",'',$txt);
        $nb=strlen($s);
        if($nb>0 and $s[$nb-1]=="\n")
            $nb--;
        $sep=-1;
        $i=0;
        $j=0;
        $l=0;
        $nl=1;
        while($i<$nb)
        {
            $c=$s[$i];
            if($c=="\n")
            {
                $i++;
                $sep=-1;
                $j=$i;
                $l=0;
                $nl++;
                continue;
            }
            if($c==' ')
                $sep=$i;
            $l+=$cw[$c];
            if($l>$wmax)
            {
                if($sep==-1)
                {
                    if($i==$j)
                        $i++;
                }
                else
                    $i=$sep+1;
                $sep=-1;
                $j=$i;
                $l=0;
                $nl++;
            }
            else
                $i++;
        }
        return $nl;
    }
///////////////////////////////////
///////////////////////////////////
///////////////////////////////////
///////////////////////////////////
    
    var $cols;
    var $tabela;
    function tdrows($elements) {

        $this->cols = $elements->length;
        //print($this->cols);
        $this->SetWidths(180/$this->cols);
        //echo 150/$this->cols;
        $str = "";
        foreach ($elements as $element) {
            
            $str .= $element->nodeValue . ",";
            //$linha[] = $element->nodeValue;
        }
        $str = explode( ",", $str);
        for ($i = 0; $i < count($str); $i ++) {
        
            if (!$str[$i])
            unset($str[$i]);
        }
        $str = array_values($str);
        return $str;
    }

    function tableToArray($html) {
        
        $this->widths = null;
        $this->tabela = null;;
        
        $DOM = new DOMDocument;
        $DOM->loadHTML('<?xml encoding="utf-8" ?>' . $html);
        //$DOM->loadHTML($html);

        $items = $DOM->getElementsByTagName('tr');

        foreach ($items as $node) {
        
            $this->tabela[] = $this->tdrows($node->childNodes);// . "<br />";
        }
        //print_r($this->widths);
        //print_r($this->tabela);
        return $this->tabela;
    }

    function WriteHTML($html) {
        $html = strip_tags($html,"<td><tr><table><p><ul><li><ol>"); //remove all unsupported
        //$html = strip_tags($html,"<td><tr><table><p><ul><li><ol>"); //remove all unsupported
        $html = str_replace("\n",'',$html); //replace carriage returns by spaces
        $html = str_replace("\r",'',$html); //replace carriage returns by spaces
        $html = str_replace("\t",'',$html); //replace carriage returns by spaces
        $html = str_replace("  ",' ',$html); //replace carriage returns by spaces
        $a = preg_split('#<tbody>(.*?)</tbody>|<ul>(.*?)</ul>|<ol>(.*?)</ol>|<p>(.*?)</p>#s',$html,-1,PREG_SPLIT_DELIM_CAPTURE); //explodes the string
        //$a = parseTable($html);

        $a2 = array();
        //for ($i = 0; $i < count($a); $i++) {
        foreach ($a as $pos) {

            while( strrpos($pos, "  ") ) { //troca na string espaços duplos ("__") por espaço simples ("_") enquanto nela existirem
                $pos = str_replace("  "," ",$pos);
            }
            while( strrpos($pos, '> <') ) { //troca na string ocorrencias de '> <' por '><' enquanto nela existirem
                $pos = str_replace('> <','><',$pos);
            }
            $pos = trim($pos);
            if($pos)
                $a2[] = trim($pos);
        }
        $a = $a2;
        unset($a2);

        foreach ($a as $pos) {
            //SE É LISTA
            if( strrpos($pos, '<li>') ) {
            
                $lista = preg_split('#<li>(.*?)</li>#s',$pos,-1,PREG_SPLIT_DELIM_CAPTURE); //explodes the string in array separated by <li></li> tags

                foreach ($lista as $item) {
                
                    $item = trim($item);
                    if($item)
                        $a2[] = trim($item);
                }
                
                $lista = $a2;
                unset($a2);

                foreach ($lista as $item) {
                    //$this->GetStringWidth($item);
                    $this->Cell(5, 5, chr(127), 0, 0, 'R');
                    //$this->Cell(8);
                    $this->Cell(20, 5, $item, 0, 0, 'L');
                    $this->Ln(5);
                }
                $this->Ln(3);
                
            } //SE É TABELA
            elseif( strrpos($pos, '<tr>') ) {
                //unset($this->tabela);
                $this->tableToArray($pos);
                //$DOM = null;
                //print_r($this->tabela);
                foreach ($this->tabela as $linha){
                    //print_r($this->widths);
                    $this->Row( $linha );
                }
                $this->Ln(4);
            }
            else {
                // É PARAGRAFO
                //echo $pos."<br>";
                $this->MultiCell(0,5,"$pos");
                $this->Ln(3);
            }
        }
    }      
}
?>
