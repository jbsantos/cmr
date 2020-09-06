<?php
//pego os dados enviados pelo formulario
//$nome = "Servi&ccedil;o do dia ".date("d/m/Y");//$_POST["nome"];
//$email = "ericsonero@barf.intraer";
$mensagem = "Relatório em anexo.";//$_POST["mensagem"];
//$assunto = $nome; //$_POST["assunto"];
$email_from = $email_relator; //$_POST["email_from"];
//formato o campo da mensagem
//$mensagem = wordwrap( $mensagem, 50, "<br> ", 1);
//valido os emails
//if (!ereg("^([0-9,a-z,A-Z]+)([.,_]([0-9,a-z,A-Z]+))*[@]([0-9,a-z,A-Z]+)([.,_,-]([0-9,a-z,A-Z]+))*[.]([0-9,a-z,A-Z]){2}([0-9,a-z,A-Z])?$", $email)){
//echo"<center>Digite um email valido</center>";
//echo "<center><a href=\"java script:history.go(-1)\">Voltar</center></a>";
//exit;
//}
//if (!ereg("^([0-9,a-z,A-Z]+)([.,_]([0-9,a-z,A-Z]+))*[@]([0-9,a-z,A-Z]+)([.,_,-]([0-9,a-z,A-Z]+))*[.]([0-9,a-z,A-Z]){2}([0-9,a-z,A-Z])?$", $email_from)){
//echo "<center>Digite um email vaalido</center>";
//echo "<center><a href=\"java script:history.go(-1)\"><center>Voltar</center></a>";
//exit;
//}
$arquivo = isset($_FILES["arquivo"]) ? $_FILES["arquivo"] : FALSE;
$arquivo["name"] = "/tmp/file.pdf";
$arquivo["tmp_name"] = "file.pdf";
$arquivo["type"] = "pdf";
if(file_exists($arquivo["name"]) and !empty($arquivo)) {
    $fp = fopen($arquivo["name"],"rb");
    $anexo = fread($fp,filesize($arquivo["name"]));
    $anexo = base64_encode($anexo);
    fclose($fp);
    $anexo = chunk_split($anexo);
    $boundary = "XYZ-" . date("dmYis") . "-ZYX";
    $mens = "--$boundary\n";
    $mens .= "Content-Transfer-Encoding: 8bits\n";
    $mens .= "Content-Type: text/plain; charset=\"UTF-8\"\n\n"; //plain
    $mens .= "$mensagem\n";
    $mens .= "--$boundary\n";
    $mens .= "Content-Type: ".$arquivo["type"]."\n";
    $mens .= "Content-Disposition: attachment; filename=\"".$arquivo["tmp_name"]."\"\n";
    $mens .= "Content-Transfer-Encoding: base64\n\n";
    $mens .= "$anexo\n";
    $mens .= "--$boundary--\r\n";
    $headers = "MIME-Version: 1.0\n";
    $headers .= "From: \"$relator_iso\" <$email_from>\r\n";
    $headers .= "Content-type: multipart/mixed; boundary=\"$boundary\"\r\n";
    $headers .= "$boundary\n";
    //envio o email com o anexo
    $envio = mail($email_setor, $assunto, $mens, $headers);
    //echo"<center><h1>Email enviado com Sucesso!</h1></center>";
    //echo "<center><a href=\"javascript:history.go(-1)\">Voltar</center></a>";
}
//se não tiver anexo
else {
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    $headers .= "From: \"$relator\" <$email_from>\r\n";
    //envia o email sem anexo
    $envio = mail($email_setor, $assunto, $mensagem, $headers);
    //echo"<center><h1>Email enviado com Sucesso!</h1></center>";
    //echo "<center><a href=\"javascript:history.go(-1)\">Voltar</center></a>";
}
?>
