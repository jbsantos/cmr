<?php
    

function abrirConexao() {
	
   // $con = @mysql_connect("localhost", "root","");
    


/* Connect to a MySQL database using driver invocation */
$dsn = 'mysql:dbname=cmr2020;host=127.0.0.1';
$user = 'root';
$password = '';

try {
    $dbh = new PDO($dsn, $user, $password);

    echo 'CONEXAO REALIZADO COM SUCESSO';
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}


}

    $titulo = 'SEREP-RF'; // Frase acima do formulário
    $om = 'SEREP-RF';
    $sigla_om = 'SEREP-RF';
    $site_om = 'www.SEREPRF.intraer';
    $igla_setor = 'SEREP-RF'; // Sigla da seção responsável por receber os relatórios
    $email_setor = 'brunabsp@ala15.intraer'; //endereço de e-mail para onde o sistema envia os relatórios
    $telefone_setor = '(81)3461-7483';
?>
