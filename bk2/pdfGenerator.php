<?php
header("Content-Type: text/html; charset=UTF-8",true);
//include_once("../../../controller/verifica_session.php");
//include("../../../classes/MYSQL.class.php");
//include("../../../classes/model/Tabela.class.php");
//include("../../../functions/dataPorExtenso.php");
//include("../../../classes/model/Usuario.class.php");
//include("../classes/model/Parte.class.php");
include("classes/fpdf/fpdf.php");
include("classes/fpdf/PDFGenerator.class.php");
include("classes/DocToMail.class.php");
//include("config.php");

//if(isset($_GET['data_inicio'])){

	
	$pdf = new PDFGenerator();
    //$pdf = new Parte();
    $pdf->AliasNbPages();
    $pdf->AddPage();

    $pdf->SetFont('Arial','B',14);
    $pdf->Cell(0,-38,"Ala 15",0,0,'C');
    $pdf->Ln(2);
    $pdf->Cell(0,-30,"RELATÓRIO DE VULNERABILIDADES",0,0,'C');
    $pdf->Ln(2);
    $pdf->Cell(0,-20,"SINTE - CONTRA-INTELIGÊNCIA",0,0,'C');
    $pdf->Ln(18);

    $pdf->SetFont('Times','',12);
    //$pdf->MultiCell(0,5,"$om_relatorio");
    $pdf->Cell(0,-2,"$om_relatorio",0,0,'C');//ok
    $pdf->Ln(12);

    //$pdf->SetFont('Arial','B',14);
    //$pdf->MultiCell(0,5,"1 RECEBIMENTO:");
    //$pdf->Ln(1);
    $pdf->Cell(17);
    $pdf->SetFont('Times','',12);
    $pdf->MultiCell(20, 0, "$secao",0,0,'L');//ok
    //$pdf->Ln(6);
    $pdf->Cell(10);
    $pdf->Cell(127, 0,"$data", 0, 0,'R');
    $pdf->Cell(13);
    $pdf->Cell(11, 0,"$hora", 0, 0,'R');
    $pdf->Ln(15);
    $pdf->Cell(60);
    $pdf->Cell(212, 0, "$pessoal", 0, 0);
    $pdf->Ln(16);
    $pdf->Cell(47,67);
    $pdf->SetFont('Times','',11.5);
    $pdf->MultiCell(0, 4.5, "$situacao");
    $pdf->Ln(14);
    $pdf->Cell(12);
    $pdf->SetFont('Times','',11);
    $pdf->SetXY(23,186); 
    $pdf->Cell(70, -3.5, "$relator", 0, 0, "C");
    $pdf->Cell(17); 
    $pdf->Cell(20, -3.5, "$email_relator", 0, 0, "C");
    $pdf->Cell(22); 
    $pdf->Cell(22, 6, "$data_again", 0, 0);
/*
    $pdf->SetFont('Arial','B',14);
    $pdf->MultiCell(0,5,"2 PARADA DIÁRIA:");
    $pdf->Ln(1);
    $pdf->SetFont('Times','',12);
    //$pdf->MultiCell(0,5,"$parada");
    $pdf->WriteHTML($parada);
    $pdf->Ln();

    $pdf->SetFont('Arial','B',14);
    $pdf->MultiCell(0,5,"3 EQUIPE DE SERVIÇO:");
    $pdf->Ln(1);
    $pdf->SetFont('Times','',12);
    //$pdf->MultiCell(0,5,"$equipe");
    $pdf->WriteHTML($equipe);
    $pdf->Ln();

    $pdf->SetFont('Arial','B',14);
    $pdf->MultiCell(0,5,"4 MATERIAL CARGA:");
    $pdf->Ln(1);
    $pdf->SetFont('Times','',12);
    //$pdf->MultiCell(0,5,"$material");
    $pdf->WriteHTML($material);
    $pdf->Ln();

    $pdf->SetFont('Arial','B',14);
    $pdf->MultiCell(0,5,"5 OCORRÊNCIAS");
    $pdf->Ln(1);
    $pdf->SetFont('Arial','',14);
    $pdf->MultiCell(0,5,"5.1 Permuta:");
    $pdf->Ln(1);
    $pdf->SetFont('Times','',12);
    //$pdf->MultiCell(0,5,"$permuta");
    $pdf->WriteHTML($permuta);
    $pdf->Ln();

    $pdf->SetFont('Arial','',14);
    $pdf->MultiCell(0,5,"5.2 Claviculário:");
    $pdf->Ln(1);
    $pdf->SetFont('Times','',12);
    //$pdf->MultiCell(0,5,"$claviculario");
    $pdf->WriteHTML($claviculario);
    $pdf->Ln();

    $pdf->SetFont('Arial','',14);
    $pdf->MultiCell(0,5,"5.3 Viatura:");
    $pdf->Ln(1);
    $pdf->SetFont('Times','',12);
    //$pdf->MultiCell(0,5,"$viatura");
    $pdf->WriteHTML($viatura);
    $pdf->Ln();

    $pdf->SetFont('Arial','',14);
    $pdf->MultiCell(0,5,"5.4 Correspondência:");
    $pdf->Ln(1);
    $pdf->SetFont('Times','',12);
    //$pdf->MultiCell(0,5,"$correspondencia");
    $pdf->WriteHTML($correspondencia);
    $pdf->Ln();

    $pdf->SetFont('Arial','',14);
    $pdf->MultiCell(0,5,"5.5 Telefone:");
    $pdf->Ln(1);
    $pdf->SetFont('Times','',12);
    //$pdf->MultiCell(0,5,"$telefone");
    $pdf->WriteHTML($telefone);
    $pdf->Ln();
    
    //Instalacoes ADD com sucesso!
    $pdf->SetFont('Arial','',14);
    $pdf->MultiCell(0,5,"5.6 Instalações:");
    $pdf->Ln(1);
    $pdf->SetFont('Times','',12);
    //$pdf->MultiCell(0,5,"$instalacoes");
    $pdf->WriteHTML($instalacoes);
    $pdf->Ln();

    $pdf->SetFont('Arial','',14);
    $pdf->MultiCell(0,5,"5.7 Outros:");
    $pdf->Ln(1);
    $pdf->SetFont('Times','',12);
    $pdf->MultiCell(0,5,"$outros");
    $pdf->Ln();

    $pdf->SetFont('Arial','B',14);
    $pdf->MultiCell(0,5,"6 SUGESTÕES:");
    $pdf->Ln(1);
    $pdf->SetFont('Times','',12);
    //$pdf->MultiCell(0,5,"$sugestoes");
    $pdf->WriteHTML($sugestoes);
    $pdf->Ln();

    $pdf->SetFont('Arial','B',14);
    $pdf->MultiCell(0,5,"7 PASSAGEM:");
    $pdf->Ln(1);
    $pdf->SetFont('Times','',12);
    $pdf->MultiCell(0,5,"$passagem");
    $pdf->Ln();

    // texto alinhado à direita
    $pdf->Ln(30);
    $pdf->Cell(0,7,$local_data,0,2,'R');
    $pdf->Ln(10);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(0,7, "_________________________________________", 0, 1, 'R');
    $pdf->SetFont('Times','',12);
    $pdf->Cell(0,7, $assinatura, 0, 1, 'R');
    //$pdf->Line(20, 45, 210-20, 45); */

    //$pdf->Output($pdfFile);
    //$pdf->Output($pdfFile,"D");

    //if ( isset($_GET['status']) && $_GET['status'] == 'enviado' ) {

        //$mail = new DocToMail($pdfFile, $data_inicio, "$uid@barf.intraer, $mailList");
    //    $mail = new DocToMail($pdfFile, $data_inicio, "$uid@barf.intraer");
    //    header('Location:../view/partList.php?status=enviado');
    //    exit;            
    //}
    //else {

        $pdf->Output("/tmp/file.pdf","F");
        //$pdf->Output("/tmp/file.pdf", 'D');
    //}

//}

?>
