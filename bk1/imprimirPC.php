     <?php

    if(isset($_GET["codigo"])){
        $codigo = $_GET["codigo"];
        include("mpdf60/mpdf.php");
        include_once 'config.php';
        $con = abrirConexao();
        mysql_set_charset('UTF8', $con);
        
        $dadosDoComprovante = array();
        $sql = "select * from cadastro where COD = $codigo";
        echo $codigo;
        $resultado = mysql_query($sql);
        if ($resultado){
            while ($linha = mysql_fetch_array($resultado)) {
              
   
             
                 $dadosDoComprovante[0] = $linha['om'];
                $dadosDoComprovante[1]= $linha['posto'];
                $dadosDoComprovante[2] = $linha['reserva'];
                $dadosDoComprovante[3] = $linha['bol'];
                 $dadosDoComprovante[4] = $linha['nome_militar'];
                 $dadosDoComprovante[5] = date('d/m/Y', strtotime($linha['nascimento'])); 
                $dadosDoComprovante[6]= $linha['id'];
                $dadosDoComprovante[7] = $linha['nome_dependente'];
                $dadosDoComprovante[8] = $linha['letivo'];
                 $dadosDoComprovante[9] = $linha['email'];
                 $dadosDoComprovante[10] = $linha['tel'];
                $dadosDoComprovante[11]= $linha['bol_local'];
                $dadosDoComprovante[13] = $linha['grau'];
                 $dadosDoComprovante[14] = $linha['ensino'];
                  $dadosDoComprovante[12] =  date('d/m/Y', strtotime($linha['data2'])); 

                  $meses = array('Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');


                  $meses[(int)(date('m') - 1)];
                    $arrayData = explode("/",$dadosDoComprovante[12]);
$mes ="";
// Imprimindo os dados:
$arrayData[0];
$mes =  $arrayData[1] -1;
$arrayData[2];

        $date =  date('d/m/Y', strtotime($linha['data2'])); 
            }
        }
        $html = "
			 <fieldset>
			 
			 <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'> 
			 <meta name='viewport' content='width=device-width, initial-scale=1.0'> 
			 <title></title>
			 <meta name='description' content='Responsive Retina-Friendly Menu with different, size-dependent layouts' />
			 <meta name='keywords' content='responsive menu, retina-ready, icon font, media queries, css3, transition, mobile' />
			 <meta name='author' content='Codrops' />
			 <link rel='shortcut icon' href='../favicon.ico'> 
			 <link rel='stylesheet' type='text/css' href='css/default.css' />
			 <link rel='stylesheet' type='text/css' href='css/component.css' />
			 <script src='js/modernizr.custom.js'></script>
			 <link href='bootstrap/css/bootstrap.min.css' rel='stylesheet' media='screen' />
			 <script src='bootstrap/js/bootstrap.min.js'></script>
			 
			

				
      				<center  align='center'>REQUERIMENTO DE MATRÍCULA <br>
      					<img  src='img/aeron.jpg' width='10%'>
                    <h5  align='center'>MINISTÉRIO DA DEFESA<br>COMANDO DA AERONÁUTICA <br> SERVIÇO DE RECRUTAMENTO E PREPARO DE PESSOAL DA AERONÁUTICA DE RECIFE  </h5></center>
      				<h5 align='right'> RECIFE, $arrayData[0] de $meses[$mes] de $arrayData[2]</h5>
      				<h5 style='margin-left:0px;'>Requerimento<br></h5><br> 
      				<div>Do
      					<table border='1' class='table' style='width: 100%;'>
							<tr>
								<th colspan='2' class='th1'>Posto/Graduação
</th>
								<th colspan='2' class='th2'>$dadosDoComprovante[1] </th>
							</tr>
							
                                                        <tr>
								<th colspan='2' class='th1'>Nome completo</th>
								<th colspan='2' class='th2'>$dadosDoComprovante[4] </th>
							</tr>
							<tr>
								<th colspan='2' class='th1'>Identidade COMAER</th>
								<th  colspan='2' class='th2'>$dadosDoComprovante[6]</th>
                                                                    
							</tr>
							<tr>
								<th class='th1'>R/1 Data de Publicação da Reserva</th>
								<th class='th2'>$dadosDoComprovante[2]</th>
                                                                    <th class='th1'> Boletim/Data</th>
								<th class='th2'>$dadosDoComprovante[2]</th>
							</tr>
                                                       

							<? include('infor.php');?>


	

                                                       
						</table>
                                                
</div>
<br>
<p> Ao Ilmo. Sr. Comandante do Colégio Militar de Recife<br>
                                                          Objeto: Matrícula no Colégio Militar de Recife<br><br>

                    1. Vem requerer a V .Exa. (V. Sa.) conceder matrícula no Colégio Militar de Recife, em regime de externato, para meu dependente, conforme descrito abaixo:</p>
                    

<div>
      					<table  border='1' class='table' style='width: 100%;'>
							<tr>
								<th colspan='2'>Nome Completo</th>
</th>
								<th colspan='2'>$dadosDoComprovante[7]</th>
							</tr>
							
                                                        <tr>
								<th class='th1'>Grau de Parentesco:</th>
								<th class='th2'>$dadosDoComprovante[13] </th>
                                                                    <th class='th1'>Data de Nascimento:</th>
								<th class='th2'>$dadosDoComprovante[5] </th>
							</tr>
							<tr>
								<th colspan='2' class='th1'>Ano letivo</th>
								<th colspan='2' class='th2'>$dadosDoComprovante[8] do ensino $dadosDoComprovante[14]
                                                               
                                                                    </th>
							</tr>
							

							<? include('infor.php');?>

						</table><br>
                                                
                               2. Tal solicitação encontra amparo no Art. 52 inciso II § 1º do Regulamento dos    Colégios Militares (R-69).
".
                                               
						
						
			
			
     
" </fieldset>";
	$mpdf=new mPDF(); 
	$mpdf->SetDisplayMode('fullpage');
	$css = file_get_contents("cssTeste.css");
	$teste = file_get_contents("testes.php");
	$mpdf->WriteHTML($css,1);
	$mpdf->WriteHTML($html);
	$mpdf->Output();
    }
?>

