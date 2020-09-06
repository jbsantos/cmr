<?php

include 'funcao.php';
include './phpmailer/smtp.php';
include './phpmailer/phpmailer.php';

//include 'loga.php';
$idb = $_POST['idb'];

$data = $_POST['data'];
$act = $_POST['act'];
$d1 = configData($data, 1);
$idtipo = $_POST['tipo'];
$texto = addslashes($_POST['texto']);
$arquivo = $_FILES["boletim"];
$arquivoxx = $_FILES["bol_anexo"];
$arquivo_nome = $arquivo["name"];
$boletimcad = $_POST['boletimcad'];
$nrbol = $_POST['nrbol'];
$nome_anexo = $_POST['nome_anexo'];
 $idapagaranexo = "";
 $idbolanexo = "";
if (isset($_GET['apagaranexo'])) {
    $idapagaranexo = $_GET['apagaranexo'];
}
if (isset($_GET['idbolanexo'])) {
    $idbolanexo = $_GET['idbolanexo'];
}
// tentativa de colocar o formulario da data no mozilla
function date_converter($_date = null) {
        $format = '/^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/';
        if ($_date != null && preg_match($format, $_date, $partes)) {
	return $partes[3].'-'.$partes[2].'-'.$partes[1];
        }
        return false;
}
echo "Aguarde enquanto o sistema está verificando as pessoas que foram citadas neste boletim, para o envio de email.";

switch ($idtipo) {
    case 1:
        $diretorio = "boletim interno";
        $dir = "bolinterno";

        break;
    case 2:
        $diretorio = "boletim externo";
        $dir = "bolexterno";

        break;
    case 3:
        $diretorio = "aditamento do boletim interno";
        $dir = "bolinterno";
        break;
    case 4:
        $diretorio = "aditamento do boletim externo";
        $dir = "bolexterno";
        break;
    case 5:
        $diretorio = "boletim de informação pessoal";
        $dir = "abcbolpessoal"; //
        break;
    case 6:
        $diretorio = "boletim interno reservado";
        $dir = "abcbolreservado";
        break;
    case 7:
        $diretorio = "boletim externo reservado";
        $dir = "abcbolextreservado"; //
        break;
    case 8:
        $diretorio = "aditamento informação pessoal";
        $dir = "abcaditamentobolpessoal";
        break;
}


$id_arquivo = "boletim";
$nome_arquivo = $_FILES[$id_arquivo]["name"];
$arquivo_temporario = $_FILES[$id_arquivo]["tmp_name"];

$dirx = "abcbolanexo";
$id_arquivox = "bol_anexo";
$nome_arquivox = $_FILES[$id_arquivo]["name"];
$arquivo_temporariox = $_FILES[$id_arquivox]["tmp_name"];


// funcional
//if(!is_dir($dirx)){
//    
//    echo "pasta $dirx nao existe";
//} else {
//    print_r($_FILES['bol_anexo']) ;
//    $arquivox = isset($_FILES['bol_anexo']) ? $_FILES['bol_anexo']:FALSE;
//
//    for ($controle = 0; $controle < count($arquivox['name']); $controle++) {
//        $destino = $dirx."/".$arquivox['name'][$controle];
//        if(move_uploaded_file($arquivo_temporariox, "$dirx/$nome_arquivox")){
//    
//        echo "upload realizado com sucesso";
//    }else {
//    echo "erro ao realizar o upload ";
//    }
//    
//   
//}}
//$id_arquivox = "bol_anexo";
//$nome_arquivox = $_FILES[$id_arquivox]["name"];
//$arquivo_temporariox = $_FILES[$id_arquivox]["tmp_name"];
//**********************************************************************
//Envio do E-mail para notificar que a pessoa foi mencionada no boletim
//**********************************************************************

include '../sap/objetos/Pessoa.php';
$pessoa = new Pessoa();
$pessoa = $pessoa->getPessoasAtivas();

//Script antigo para envio de emails
/*
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: sdtic@gaprf.intraer\r\n";
*/

//Novo script para envio de emails
$objPhpMailer = new PHPMailer();
    
$objPhpMailer->SMTP_PORT = "587";
$objPhpMailer->SMTPSecure = "tls";
$objPhpMailer->IsSMTP();
$objPhpMailer->Host = "smtp.mail.intraer";
$objPhpMailer->SMTPAuth = true;
$objPhpMailer->Username = "sdtic.gaprf@mail.intraer";
$objPhpMailer->Password = "\$Dt1c2017";
$objPhpMailer->From = "sdtic.gaprf@mail.intraer";
$objPhpMailer->FromName = "SDTIC GAPRF";
//$objPhpMailer->AddAddress("rivelinorgmf@mail.intraer");
$objPhpMailer->IsHTML(true);


foreach ($pessoa as $value) {
	//echo stripos($texto, $value->nome) . " " . stripos($texto, $value->saram);
    if (stripos(substr($texto, 0, strlen($texto) - 85), $value->nome) > 0 || stripos(substr($texto, 0, strlen($texto) - 85), $value->saram) > 0) {
    //if(stripos($texto, $value->nome) > 0 || stripos($texto, $value->saram) > 0){
        if ($value->email_intraer <> "") {
            $value->email_intraer = str_replace("fab.mil.br", "mail.intraer", $value->email_intraer);
            //$headers .= "Bcc: $value->email_intraer \r\n";
	    $objPhpMailer->AddBCC($value->email_intraer);
        }
    }
}


switch ($idtipo) {
    case 1:
        $link = "<a href='https://www.comar2.intraer/boletim/bolinterno/" . $arquivo_nome . "'>" . $arquivo_nome . "</a>";
        $complemento = "Podendo ser acessado pelo link: ". utf8_encode($link);
        break;
    case 2:
        $link = "<a href='https://www.comar2.intraer/boletim/bolexterno/" . $arquivo_nome . "'>" . $arquivo_nome . "</a>";
        $complemento = "Podendo ser acessado pelo link: ". utf8_encode($link);
        break;
    case 3:
        $link = "<a href='https://www.comar2.intraer/boletim/bolinterno/" . $arquivo_nome . "'>" . $arquivo_nome . "</a>";
        $complemento = "Podendo ser acessado pelo link: ". utf8_encode($link);
        break;
    case 4:
        $link = "<a href='https://www.comar2.intraer/boletim/bolexterno/" . $arquivo_nome . "'>" . $arquivo_nome . "</a>";
        $complemento = "Podendo ser acessado pelo link: ". utf8_encode($link);
        break;
    case 5:
        $link = "<a href='https://www.comar2.intraer/boletim/principal.php?pag=res&tipo=5&bol=" . $arquivo_nome . "'>" . $arquivo_nome . "</a>";
        $complemento = "<br/> Obs.: Os boletins de informações pessoais e reservados podem ser acessados nas alterações do militar, no <a href='http://www.sti.intraer/'>Portal do Militar</a>, ou consultando o setor de Boletim";
        break;
    case 6:
        $link = "<a href='https://www.comar2.intraer/boletim/principal.php?pag=res&tipo=6&bol=" . $arquivo_nome . "'>" . $arquivo_nome . "</a>";
        $complemento = "<br/> Obs.: Os boletins de informações pessoais e reservados podem ser acessados nas alterações do militar, no <a href='http://www.sti.intraer/'>Portal do Militar</a>, ou consultando o setor de Boletim";

        break;
    case 7:
        $link = "<a href='https://www.comar2.intraer/boletim/principal.php?pag=res&tipo=7&bol=" . $arquivo_nome . "'>" . $arquivo_nome . "</a>";
        $complemento = "<br/> Obs.: Os boletins de informações pessoais e reservados podem ser acessados nas alterações do militar, no <a href='http://www.sti.intraer/'>Portal do Militar</a>, ou consultando o setor de Boletim";
        break;

    case 8:
        $link = "<a href='https://www.comar2.intraer/boletim/principal.php?pag=res&tipo=8&bol=" . $arquivo_nome . "'>" . $arquivo_nome . "</a>";
        $complemento = "<br/> Obs.: Os aditamentos de informações pessoais e reservados podem ser acessados nas alterações do militar, no <a href='http://www.sti.intraer/'>Portal do Militar</a>, ou consultando o setor de Boletim";
        break;
}




$assunto = "Matéria no Boletim do GAP-RF";

$arquivo = "[SDTIC: Esta é uma mensagem automática e não precisa ser respondida]<br/>Informo a V.Exa./V.Sa. que seu nome ou número de ordem foi mencionado no $diretorio nº $nrbol do GAP-RF, do dia $data. $complemento ";

//Antigo email
//$enviaremail = mail("", $assunto, $arquivo, $headers);

//Novo email
$objPhpMailer->Subject = utf8_decode($assunto);
$objPhpMailer->Body = "<html>
                                       <head>
                                            <meta charset='UTF-8'>
                                       </head>
                                    <body>
                                            <p>".utf8_decode($arquivo)."</p>
                                                 <br/>
                                    </body>
                            </html>";

$objPhpMailer->Send();
//	echo "Sucesso";
//}else{
//	echo $objPhpMailer->ErrorInfo;
	//echo print_r($objPhpMailer);exit();
//}

//*******************************************
//fim do script
//*******************************************


include 'configs.php';

if ($act == 'i') {
    $result = mysql_query("SELECT * FROM boletim where data = '$d1' and idtipo = '$idtipo'") or die("1) " . mysql_error());
    $idbol = mysql_result($result, 0, 'id');

//    if (mysql_num_rows($result) > 0) {
//        header("Location:principal.php?pag=bolcad&idb=$idbol");
//    } else {

    $sql = mysql_query("INSERT INTO boletim (boletim, nrbol,texto, data, idtipo)
                        values('$arquivo_nome', '$nrbol', '$texto', '$d1', $idtipo)") or die("2) " . mysql_error());
//echo $arquivo_temporario . " $dir/$nome_arquivo";
//exit();

    move_uploaded_file($arquivo_temporario, "$dir/$nome_arquivo");

    //pega os arquivos e nomes dos anexos e move para pasta abcbolanexo
    $anexos = array();
    foreach ($_FILES['bol_anexo']['tmp_name'] as $key => $tmp_name) {
        ( $file_name = $_FILES['bol_anexo']['name'][$key]);
        ( $file_size = $_FILES['bol_anexo']['size'][$key]);
        ( $file_tmp = $_FILES['bol_anexo']['tmp_name'][$key]);
        ( $file_type = $_FILES['bol_anexo']['type'][$key]);
        move_uploaded_file($file_tmp, "abcbolanexo/" . $file_name);

        // linha adicionada 18/08/2017
        $anexos[] = $file_name;
    }

    $ultimoBoletim = "";
    $sqlx = mysql_query("select id from boletim order by id desc limit 1");
    while ($linha = mysql_fetch_array($sqlx)) {
        $ultimoBoletim = $linha['id'];
    }

    for ($index = 0; $index < count($anexos); $index++) {
        
         if ($anexos[$index]!=""){
        $sql = mysql_query("INSERT INTO anexo (idboletim, nome_arquivo)
                        values($ultimoBoletim, '$anexos[$index]')") or die("2) " . mysql_error());
    }
}


    header("Location:principal.php?pag=bol");
//  }
} else {
    $sql = mysql_query("update boletim set nrbol = '$nrbol', texto = '$texto', data = '$d1', idtipo = '$idtipo' where id = $idb");

    if (($arquivo_nome != $boletimcad) && ($arquivo_nome != '')) {
        "atualizei bol<br>";
        "<br>arquivonome:" . $arquivo_nome;
        "<br>boletimcad:" . $boletimcad;
        $sql = mysql_query("update boletim set boletim = '$arquivo_nome' where id = $idb")or die("erro: " . mysql_error());
//echo $arquivo_temporario . " $dir/$nome_arquivo";
//exit();
        move_uploaded_file($arquivo_temporario, "$dir/$nome_arquivo");
    }



    $dt = explode('/', $data); //nova data
    $mes = $dt[1];
    $ano = $dt[2];
    echo "mes:" . $mes;

    //atualizar os arquivos do anexo
    $anexos = array();
    foreach ($_FILES['bol_anexo']['tmp_name'] as $key => $tmp_name) {
        ( $file_name = $_FILES['bol_anexo']['name'][$key]);
        ( $file_size = $_FILES['bol_anexo']['size'][$key]);
        ( $file_tmp = $_FILES['bol_anexo']['tmp_name'][$key]);
        ( $file_type = $_FILES['bol_anexo']['type'][$key]);
        move_uploaded_file($file_tmp, "abcbolanexo/" . $file_name);

        // linha adicionada 18/08/2017
        $anexos[] = $file_name;
    }

    $i = 0;
    $sqlx = mysql_query("select * from anexo where idboletim = '$idb'");
    while ($linha = mysql_fetch_array($sqlx)) {
        $idanexo[] = $linha['idanexo'];
        $nome_arquivobd = $linha['nome_arquivo'];
    }

    if ($idapagaranexo != "" && $idbolanexo != "") {
        $sqldel = mysql_query("delete from anexo where idanexo = '$idapagaranexo'");
        echo $nome_anexo;
        header("Location:principal.php?pag=bol&idb=$idbolanexo");
    } else {

//                for ($index = 0; $index < count($anexos); $index++) {
//            $sql = ("update anexo set nome_arquivo='$anexos[$index]' where idanexo = '$idb'");
//            
//    }
//   


        
        for ($index = 0; $index < count($anexos); $index++) {
            if ($anexos[$index]!=""){
            
            $sql = mysql_query("INSERT INTO anexo (idboletim, nome_arquivo)values($idb, '$anexos[$index]')") or die("2) " . mysql_error());
            header("Location:principal.php?pag=bolalt&edtmes=" . $mes . "&edtano=" . $ano . "&tipo=" . $idtipo);
            
            }else{

        header("Location:principal.php?pag=bolalt&edtmes=" . $mes . "&edtano=" . $ano . "&tipo=" . $idtipo);
    }}}
}
?>
