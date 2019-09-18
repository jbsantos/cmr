
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<?php
echo "<meta HTTP-EQUIV='refresh';URL=listaPC.php'>";
?>
<title>Deferidos</title>
<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>LISTA DE REQUERIMENTOS DEFERIDOS</title>
		<meta name="description" content="Responsive Retina-Friendly Menu with different, size-dependent layouts" />
		<meta name="keywords" content="responsive menu, retina-ready, icon font, media queries, css3, transition, mobile" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
		<script src="bootstrap/js/bootstrap.min.js"></script>

<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.8/css/jquery.dataTables.css">
  
<!-- jQuery -->
<script type="text/javascript" charset="utf8" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
  
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.8/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="js_file/teste.js"></script>
</head>
<body>
<?php 

include_once 'config.php';
$con = abrirConexao();
mysql_set_charset('UTF8', $con);


?>
    <div align="center"> 
	<table border="1" style="width: 90%;"><br>
		<tr><td>
		<div class="container">	
                    <br>  
                    <center><img  src="img/aeron.jpg" width="10%" class="center-block">
                    <h5 align="center" >COMANDO DA AERONÁUTICA <br> SEREP-RF  <br> - Serviço de Recrutamento e Preparo de Pessoal da Aernáutica de Recife</h5></center>
			<!-- Codrops top bar -->
			
                      
                        <div>
                            <h3 align="center">EQUIPAMENTO DEVOLVIDO</h3>
                        </div>
                       
                        <table id='tabela2' border='1' style="padding: 10px;">
	<thead>
         <tr align="right" style='background-color: #0080FF;'>
                <th align="right" style='width: 5%; color : black'> <div align="center"> POSTO </div></th>
		<th align="center" style='width: 10%;color : black'><div align="center"> NOME DO MILITAR </div></th>
                <th align="center" style='width: 10%;color : black'><div align="center"> NOME DO DEPENDENTE </div></th>
                <th align="center" style='width: 10%;color : black'><div align="center"> OM </div></th>
                <th align="center" style='width: 5%;color : black'><div align="center"> TELEFENE </div></th>
		<th align="center" style='width: 5%;color : black'><div align="center"> EMAIL </div></th>
		<th align="center" style='width: 5%;color : black'><div align="center"> DATA DE CONCLUSÃO </div></th>
<!--                <th align="center" style='width: 5%;color : black'><div align="center"> IMPRIMIR </div></th>-->
                <th align="center" style='width: 5%;color : black'><div align="center"> STATUS </div></th>
            </tr>
	 </thead>
<?php	
	
//$cont =  0;
$sql1 = mysql_query("SELECT * from cadastro where exclusao_logic = 4 ;");
		while ($linha1 = mysql_fetch_array($sql1)) {
                  //  $cod = $linha['CODIGO'];
?>
        <tr align="center" style="margin-top: 10px;">
                <td align="center" style="color : black"><?php echo $linha1['posto']?></td>
	 	<td align="center" style="color : black"><?php echo $linha1['nome_militar']?></td>
	 	<td align="center" style="color : black"><?php echo $linha1['nome_dependente']?></td>
	 	<td align="center" style="color : black"><?php echo $linha1['om']?></td>
                <td align="center" style="color : black"><?php echo $linha1['tel']?></td>
                 <td align="center" style="color : black"><?php echo $linha1['email']?></td>
                 
                <td align="center" style="color : black"><?php echo $linha1['data2'];?></td>
             
	 	
<!--                <td>
                    <div style="padding: 3px;">
                        <a target="_blanck" href="imprimirPC.php?codigo=<?php echo $linha['COD']?>"><button class="btn btn-info" type="submit">IMPRIMIR</button></a>
                    </div>
                </td>-->
                <td>
                   <?php     
                     $teste[] = $linha1['exclusao_logic'];
                     foreach ($teste as $value) {
                         
                         switch ($value) {
                             case "2":

                                 $value = "MANT";
                                 break;
                             case "3":

                                 $value = "CONCL-U";
                                 break;
                             case "5":

                                 $value = "CONCL-L";
                                 break;
                             case "4":

                                 $value = "ENTREG";
                                 break;

                             default:
                                 break;
                         }
                    
           }?>
                   <div>
                        <form action="pcController.php" method="get">
                    <label for="status" class="col-md-3 control-label"></label>
                   <div>
                       <select align="center" style="color :black" name="situacao" class="form-control">
                                                    <option ><?php echo $value ?></option>
                                                </select>
                                            </div>
                        <div class="form-group">
                                            
                                            <div class="input-group">
                                                <input type="hidden" class="form-control"size="10" name="codigo" id="descricao" value="<?php echo $linha['COD']?>">
                                               
                                        </div>
                    </form>
                   </div>
                   </div>
                </td>
                  <?php } ?>
	 </tr>
    
         
</table>
                        <div align="CENTER">
                      <br>  <br><a  href="gerenciadoDePaginas.php?pagina=equipamentoMant">
				<button class="btn btn-info  btn-danger-block" type="submit">VOLTAR PARA MANUTENÇÃO</button>
                      </a>&emsp;&emsp;
                           <a href="gerenciadoDePaginas.php?pagina=listarEquipamento">
				<button class="btn btn-info  btn-danger-block" type="submit">VOLTAR PARA LISTA </button>
			</a>
                       <a href="gerenciadoDePaginas.php?pagina=cadastros">&emsp;&emsp;
				<button class="btn btn-info  btn-danger-block" type="submit">MENU PRINCIPAL</button>
			</a>
                      <br>
                     
</div>
       </div>                 
</td>
</tr>

  
   
	
		<tr><td>
