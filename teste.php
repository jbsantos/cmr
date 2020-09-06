<?php
	
        include "config.php";
        include './phpmailer/smtp.php';
		include './phpmailer/phpmailer.php';
		 $dataSistema = date('d/m/Y');
		//onde havia nome_militar foi trocado por nome_militar
		//$controle = $_POST['controle'];
                abrirConexao();
                 $cod = "5000";
                 $sql = mysql_query("select * from cadastro where COD = $cod") or die(mysql_error());
                $linha = mysql_fetch_array($sql);
                 
                $letivo = "";
                $ensino = "";
               
                
		echo $om = $linha['om'];
                echo '</br>';
              echo    $saram = $linha['saram'];
               echo '</br>';
		echo $posto= $linha['posto'];
                 echo '</br>';
		echo $reserva=$linha['reserva'];
                 echo '</br>';
		echo $bol=$linha['bol'];
                 echo '</br>';
		echo $nome_militar = $linha['nome_militar'];
                 echo '</br>';
		echo $nascimento = $linha['nascimento'];
                 echo '</br>';
		echo $id = $linha['id'];
                 echo '</br>';
		echo $nome_dependente = $linha['nome_dependente'];
                 echo '</br>';
		echo $grau=$linha['grau'];
                 echo '</br>';
               echo  $letivo = $linha['letivo'];
                echo '</br>';
               //echo  $amparo = $linha['artigo'];    
                echo '</br>';
               echo  $estado = $linha['estado'];
                echo '</br>';
               echo  $cidade = $linha['cidade'];
                echo '</br>';
               echo  $ensino = $linha['ensino'];
                  echo '</br>';
                $email = strtolower($linha['email']);
                  echo '</br>';
               echo  $emailP = $linha['email_p'];
                  echo '</br>';
		echo $tel = $linha['tel'];
                   echo '</br>';
              echo   $bol_local = $linha['bol_local'];
                 echo '</br>';
               echo  $bol_local_a = $linha['bol_local_a'];//falta adicionar no banco 
                  echo '</br>';
               echo  $boletim = $linha['bol'];
                  echo '</br>';
                echo $boletim_a = $linha['reserva'];//falta adicionar no banco
                 echo $amparo = $linha['amparo'];//falta adicionar no banco
              
                
                if ($ensino=='fundamental') {
                   
                    switch ($letivo) {
                        case '0':
                            $letivo = "6º ano";

                            break;
                        case '1':
                            $letivo = "7º ano";

                            break;
                        case '2':
                            $letivo = "8º ano";

                            break;
                        case '3':
                            $letivo = "9º ano";

                            break;

                        default:
                            break;
                    }
                    
                }elseif ($ensino=='medio') {
                    
                    switch ($letivo) {
                        case '0':
                            $letivo = "1º ano";

                            break;
                        case '1':
                            $letivo = "2º ano";

                            break;
                        case '2':
                            $letivo = "3º ano";

                            break;
                        
                            default:
                            break;
                    }
    
}
		
                







               
                
		$localidade = $linha['localidade'];

		if ($nome_militar == ""){
			$nome_militar = "Desconhecido";
		}
		$email_iso= iconv ( "UTF-8", "ISO-8859-1//TRANSLIT" , $nome_militar);

		if ($email == ""){
			$email = "desconhecido";
		}
  

	$msg= "<h3 style='margin-left:40px;'>Solicitação de inscri&ccedil;&atilde;o para o sorteio recebida! <br><br></h3>";
	$msg.= "Dados do Requerente: <br>";
	$msg.= "<p style='margin-left:40px;'>Posto e Nome: $posto $nome_militar <br> ";
	$msg.= "Identidade do Militar: $id <br>";
        $msg.= "SARAM: $saram <br>";
        $msg.= "Telefone (zap): $tel <br>";
        $msg.= "Email Fab: $email <br>";
        $msg.= "Email Particular: $emailP <br>";
        $msg.= "Localidade do requerente:$localidade <br>";
	$msg.= "OM: $om <br>";
	$msg.= "Data de publicação da Reserva: $reserva <br>";
	$msg.= "Número do boletim e data: $bol <br> ";
        $msg.= "Regulamento CMR : $amparo <br>";
	$msg.= "Número e data do boletim de transferência : Nº "."$boletim-"." $bol_local <br>";
        $msg.= "Número e data do boletim de apresentação : Nº "."$boletim_a-"." $bol_local_a <br><br><br></p>";
        $msg.= "Dados do dependente: <br>";
	$msg.= "<p style='margin-left:40px;'>Inscrito: $nome_dependente <br>";
	$msg.= "Data de Nascimento: $nascimento <br>";
	$msg.= "Grau de parentesco: $grau <br>";
	$msg.= "Ano Letivo desejado cursar:".utf8_encode($letivo)." <br>";
	$msg.= "Nivel de ensino: $ensino <br> </p>";
	$msg.= "1. O participante declara ter conhecimento das instruções e requisitos previsto no R-69, Portaria nº 100-DECEX, Portaria nº 205-DECEX e Portaria nº 300-DECEX.<br>";
        $msg.= "2. A efetivação da matrícula do dependente sorteado será de responsabilidade do CMR, após a análise de todos os requisitos previstos nas legislações.";       
      
        $str = $email;
        echo $srt;
        $divideEmail = explode("@",$str);
        echo $divideEmail[0];
        echo $divideEmail[1];
      
        if ($divideEmail[1]!='fab.mil.br'||$divideEmail[1]=='mail.intraer'||$email=='') {
           $email='';
       }


	$objPhpMailer = new PHPMailer();
	    
	$objPhpMailer->SMTP_PORT = "587";
	$objPhpMailer->SMTPSecure = "tls";
	$objPhpMailer->IsSMTP();
	$objPhpMailer->Host = "smtp.gmail.com";
        //$objPhpMailer->Host = "smtp.mail.intraer";
	$objPhpMailer->SMTPAuth = true;
       $objPhpMailer->Username = "sereperfcmr@gmail.com";
	//$objPhpMailer->Username = "sdtic.gaprf@mail.intraer";
	$objPhpMailer->Password = "sereprf123@";
        //$objPhpMailer->Password = "\$Dt1c2017";
	$objPhpMailer->From = "sereperfcmr@gmail.com";
        //$objPhpMailer->From = "sdtic.gaprf@mail.intraer";
	$objPhpMailer->FromName = "SEREP - RF";
	//$objPhpMailer->AddAddress("moraesrmr@mail.intraer");
	$objPhpMailer->AddAddress("$email");
        //$objPhpMailer->AddAddress("$emailP");
	$objPhpMailer->AddBCC("$emailP");

        
        //$objPhpMailer->AddBCC("marcosmas3@fab.mil.br");
        //$objPhpMailer->AddBCC("ritoasr@fab.mil.br");
	//$objPhpMailer->AddBCC("jorgejbas@fab.mil.br");
        
        $objPhpMailer->IsHTML(true);

	$assunto="Inscrição para o sorteio de vagas no Colégio Militar de Recife";
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
        
        if ($objPhpMailer->Send()) {
            
            echo 'enviador com sucesso';
            
    
} else {
    echo 'não foi enviada';    
}
 mysql_close($con);
     
        if (isset($_POST["funcao"])) {
    $funcao = $_POST["funcao"];
    include_once "config.php";
   $con = abrirConexao();
    mysql_set_charset('UTF8', $con);

    if ($funcao == "salvaform") {

        $origens = array('"', "'", '*', 'true', 'false', '=', 'where', 'drop', 'delete', 'from', 'WHERE', 'DELETE', 'FROM', 'DROP', 'SELECT');
        $distino = "";

        $dados = array();

        $dados[0] = strtoupper(str_replace($origens, $distino, $_POST['om']));
        $dados[1] = strtoupper(str_replace($origens, $distino, $_POST['posto']));
        $dados[2] = strtoupper(str_replace($origens, $distino, $_POST['reserva']));
        $dados[3] = strtoupper(str_replace($origens, $distino, $_POST['bol']));
        $dados[4] = strtoupper(str_replace($origens, $distino, $_POST['nome_militar']));
        $dados[5] = strtoupper(str_replace($origens, $distino, $_POST['nascimento']));
        $dados[6] = strtoupper(str_replace($origens, $distino, $_POST['nome_dependente']));
        $dados[7] = strtoupper(str_replace($origens, $distino, $_POST['grau']));
        $dados[8] = strtoupper(str_replace($origens, $distino, $letivo));
        $dados[9] = strtoupper(str_replace($origens, $distino, $_POST['ensino']));
        $dados[10] = strtoupper(str_replace($origens, $distino, $_POST['email']));
        $dados[11] = strtoupper(str_replace($origens, $distino, $_POST['tel']));
        $dados[12] = strtoupper(str_replace($origens, $distino, "Nº ".$boletim." - ".$bol_local));
        $dados[13] = strtoupper(str_replace($origens, $distino, "Nº ".$boletim_a." - ".$bol_local_a));
        $dados[14] = strtoupper(str_replace($origens, $distino, $amparo));
        $dados[15] = strtoupper(str_replace($origens, $distino, $saram));
    	$dados[16] = strtoupper(str_replace($origens, $distino, $id));
        
        
        
        
       




        //RECEBENDO A IMAGEM
        //RECEBENDO A IMAGEM
//            $foto = $_FILES['foto']['tmp_name'];
//            $tamanho = $_FILES['foto']['size'];
//            $tipo = $_FILES['foto']['type'];

       
        
          $insert = "insert into cadastro (om,posto,reserva, bol, nome_militar,nascimento, nome_dependente,"
                . "grau,letivo, ensino, email, tel ,exclusao_logic, bol_local, bol_local_a, amparo, data2, email_p, localidade, saram, id) values ('$dados[0]','$dados[1]','$dados[2]','$dados[3]','$dados[4]','$dados[5]',"
                . "'$dados[6]','$dados[7]','$dados[8]','$dados[9]','$dados[10]','$dados[11]',1,'$dados[12]','$dados[13]','$dados[14]','$dataSistema','$emailP','$localidade','$dados[15]','$dados[16]')";
        
        //result = mysql_query($insert);    
        
        if($result){
echo "<script>alert('cadastrado com sucesso')</script>";
}  

        mysql_close($con);
    }
//        if ($result) {
//            echo "<script>window.location='listaPC.php';alert('PC Cadastrado com sucesso');</script>";
//        } else {
//            echo "<script>window.location='#';alert('ERRO AO CADASTRAR O PC');</script>";
//        }

//            elseif ($foto != "") {
//                $fp = fopen($foto,"rb");
//                $conteudo = fread($fp, $tamanho);	
//                $conteudo = addslashes($conteudo);
//                fclose($fp);
//
//                $insert = "insert into cardapio (nome,descricao,preco,imagem,exclusao_logica) values ('$dados[0]','$dados[1]','$dados[2]','$conteudo',1)";
//
//                $result = mysql_query($insert);
//                mysql_close($con);
//                if ($result) {
//                    echo "<script>window.location='listarCardapio.php';alert('CARDAPIO CADASTRADO COM SUCESSO');</script>";
//                }
//                else{
//                    echo "<script>window.location='cadastro.php';alert('ERRO AO CADASTRAR CARDAPIO');</script>";
//                }
//            }
    } 

        
  
	//include "enviado.php";

?>


