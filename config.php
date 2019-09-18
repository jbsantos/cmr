<?php
    

function abrirConexao() {
	
	$con = @mysql_connect("10.80.16.3", "root","manutencao");
	
	if (! $con) {
		die ("Erro ao abrir a conexao com o MySQL: " . mysql_error ());
	}
	
	mysql_select_db ("cmr2019", $con);
	
	return $con;
}

    $titulo = 'SEREP-RF'; // Frase acima do formulário
    $om = 'SEREP-RF';
    $sigla_om = 'SEREP-RF';
    $site_om = 'www.SEREPRF.intraer';
    $igla_setor = 'SEREP-RF'; // Sigla da seção responsável por receber os relatórios
    $email_setor = 'brunabsp@ala15.intraer'; //endereço de e-mail para onde o sistema envia os relatórios
    $telefone_setor = '(81)3461-7483';
?>
