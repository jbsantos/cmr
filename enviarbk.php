<?php

        include "config.php";
        include './phpmailer/smtp.php';
	include './phpmailer/phpmailer.php';

		//onde havia nome_militar foi trocado por nome_militar
		//$controle = $_POST['controle'];
		$om = $_POST['om'];
		$posto=$_POST['posto'];
		$reserva=$_POST['reserva'];
		$bol=$_POST['bol'];
		$nome_militar = $_POST['nome_militar'];
		$nascimento = $_POST['nascimento'];
		$id = $_POST['id'];
		$nome_dependente = $_POST['nome_dependente'];
		$grau=$_POST['grau'];
		$letivo = $_POST['letivo'];
		$ensino = $_POST['ensino'];
		$email = $_POST['email'];
		$tel = $_POST['tel'];
		$bol_local = $_POST['bol_local'];


		if ($nome_militar == ""){
			$nome_militar = "Desconhecido";
		}
		$email_iso= iconv ( "UTF-8", "ISO-8859-1//TRANSLIT" , $nome_militar);

		if ($email == ""){
			$email = "desconhecido";
		}


	$msg= "<h3 style='margin-left:40px;'>Colégio Militar de Recife- Inscri&ccedil;&atilde;o <br><br></h3>";
	$msg.= "Dados do Requerente: <br>";
	$msg.= "<p style='margin-left:40px;'>Posto e Nome: $posto $nome_militar <br> ";
	$msg.= "Identidade do Militar: $id <br>";
	$msg.= "OM: $om <br>";
	$msg.= "Data de publicação da Reserva: $reserva <br>";
	$msg.= "Número do boletim e data: $bol <br> ";
	$msg.= "Boletim de transferência localidade Racife: $bol_local <br><br><br></p>";
	$msg.= "Dados do dependente: <br>";
	$msg.= "<p style='margin-left:40px;'>Inscrito: $nome_dependente <br>";
	$msg.= "Data de Nascimento: $nascimento <br>";
	$msg.= "Grau de parentesco: $grau <br>";
	$msg.= "Ano Letivo desejado cursar: $letivo <br>";
	$msg.= "Nivel de ensino: $ensino <br> </p>";
	$msg.= "O participante declara querer matricular seu dependente na CMR!";




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
	$objPhpMailer->AddAddress("moraesrmr@mail.intraer");
	//$objPhpMailer->AddAddress("brunabsp@mail.intraer", "rivelinorgmf@mail.intraer");
	$objPhpMailer->IsHTML(true);

	$assunto="Matricula do Colégio Militar";
	$objPhpMailer->Subject = utf8_decode($assunto);
	$objPhpMailer->Body = "<html>
	                                       <head>
	                                            <meta charset='UTF-8'>
	                                       </head>
	                                    <body>
	                                            <p>".utf8_decode($msg)."</p>
	                                                 <br/>
	                                    </body>
	                            </html>";

	$objPhpMailer->Send();


	include "enviado.php";

?>
