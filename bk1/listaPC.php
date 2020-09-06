<?php

	include 'validaAcesso.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<title>Listar Cardapio</title>
<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Lista de controle de Pessoas Cadastrada</title>
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

include_once './config.php';
$con = abrirConexao();
mysql_set_charset('UTF8', $con);

$sql = mysql_query("select * from cadastro where exclusao_logic = 1");
$sqlStatus = mysql_query("select * from cadastro where exclusao_logic = 2 or exclusao_logic = 3 or exclusao_logic = 5");
?>
    
<div align="center"> 
  
	<table border="1" style="width: 90%;">
		<tr><td>
		<div class="container">	
			<!-- Codrops top bar -->
			<?php 
				include 'logo.php';
			?>
                        <br>
                        <div>
                            <h2 align="center">Relação de Inscrito</h2>
                        </div>
                        <br>
                        <table id='tabela' border='1' style="padding: 10px;">
	<thead>
            <tr align="right" style='background-color: #0080FF;'>
                <th align="right" style='width: 5%; color : black'> <div align="center"> POSTO </div></th>
		<th align="center" style='width: 10%;color : black'><div align="center"> NOME DO MILITAR </div></th>
                <th align="center" style='width: 10%;color : black'><div align="center"> NOME DO DEPENDENTE </div></th>
                <th align="center" style='width: 10%;color : black'><div align="center"> OM </div></th>
                <th align="center" style='width: 5%;color : black'><div align="center"> TELEFENE </div></th>
		<th align="center" style='width: 5%;color : black'><div align="center"> EMAIL </div></th>
                <th align="center" style='width: 5%;color : black'><div align="center"> IMPRIMIR </div></th>
                <th align="center" style='width: 5%;color : black'><div align="center"> &nbsp;S&nbsp;T&nbsp;A&nbsp;T&nbsp;U&nbsp;S&nbsp;   </div></th>
            </tr>
	 </thead>
<?php	
		//$cont =  0;
		while ($linha = mysql_fetch_array($sql)) {
                  //  $cod = $linha['CODIGO'];
?>
         <tr align="center" style="margin-top: 10px;">
                <td align="center" style="color : black"><?php echo $linha['posto']?></td>
	 	<td align="center" style="color : black"><?php echo $linha['nome_militar']?></td>
	 	<td align="center" style="color : black"><?php echo $linha['nome_dependente']?></td>
	 	<td align="center" style="color : black"><?php echo $linha['om']?></td>
                <td align="center" style="color : black"><?php echo $linha['tel']?></td>
                 <td align="center" style="color : black"><?php echo $linha['email']?></td>
<!--                 <td align="center" style="color : black"><?php echo date('d/m/Y', strtotime($linha['data2'])); ?></td>-->
               
	 	
                <td>
                    <div style="padding: 3px;">
                        <a target="_blanck" href="imprimirPC.php?codigo=<?php echo $linha['COD']?>"><button class="btn btn-info" type="submit">IMPRIMIR</button></a>
                    </div>
                </td>
        
                <td>
                    <form action="pcController.php" method="get">
                    <label for="status" class="col-md-3 control-label"></label>
                   <div>
                       <select align="center" style="color :black" name="situacao" class="form-control">
                                                    <option value="3">PENDENTE </option>
                                                    <option value="2">EM ANALISE</option>
                                                    <option value="5">INDEFERIDO</option>
                                                    <option value="4">DEFERIDO</option>
                                                </select>
                                            </div>
                        <div class="form-group">
                                            
                                            <div class="input-group">
                                                <input type="hidden" class="form-control"size="10" name="codigo" id="descricao" value="<?php echo $linha['COD']?>">
                                              <div style="padding: 3px;">  <button class="btn btn-info" type="submit">OK</button></div>
                                                                        
                                            </div>
                                        </div>
                    </form>
                   
                    
           
                </td>
                  <?php mysql_close($con);   } ?>
	 </tr>
	
</table>
                        

</td>
</tr>
</table>

    
                    
    <div align="center">
  
	<table border="1"  style="width: 90%;">
		<tr><td>
		<div class="container">	
			<!-- Codrops top bar -->
			
                        <br><br>
                        <div>
                            <h2 align="center">Situação Cadastral</h2>
                        </div>
                        <br>
                        <table id='tabela2' border='1' style="padding: 10px;">
	<thead>
            <tr align="right" style='background-color: #0080FF;'>
                <th align="right" style='width: 5%; color : black'> <div align="center"> POSTO </div></th>
		<th align="center" style='width: 10%;color : black'><div align="center"> NOME DO MILITAR </div></th>
                <th align="center" style='width: 10%;color : black'><div align="center"> NOME DO DEPENDENTE </div></th>
                <th align="center" style='width: 10%;color : black'><div align="center"> OM </div></th>
                <th align="center" style='width: 5%;color : black'><div align="center"> TELEFENE </div></th>
		<th align="center" style='width: 5%;color : black'><div align="center"> EMAIL </div></th>
                <th align="center" style='width: 5%;color : black'><div align="center"> IMPRIMIR </div></th>
                <th align="center" style='width: 5%;color : black'><div align="center"> &nbsp;S&nbsp;T&nbsp;A&nbsp;T&nbsp;U&nbsp;S&nbsp;   </div></th>
            </tr>
	 </thead>
<?php	
		//$cont =  0;
		while ($linha = mysql_fetch_array($sqlStatus)) {
                  //  $cod = $linha['CODIGO'];
?>
         <tr align="center" style="margin-top: 10px;">
                <td align="center" style="color : black"><?php echo $linha['posto']?></td>
	 	<td align="center" style="color : black"><?php echo $linha['nome_militar']?></td>
	 	<td align="center" style="color : black"><?php echo $linha['nome_dependente']?></td>
	 	<td align="center" style="color : black"><?php echo $linha['om']?></td>
                <td align="center" style="color : black"><?php echo $linha['tel']?></td>
                 <td align="center" style="color : black"><?php echo $linha['email']?></td>
                 
<!--                  <td align="center" style="color : black"><?php echo date('d/m/Y', strtotime($linha['data1'])); ?></td>-->
               
	 	
                <td>
                    <div style="padding: 3px;">
                        <a target="_blanck" href="imprimirPC.php?codigo=<?php echo $linha['COD']?>"><button class="btn btn-info" type="submit">IMPRIMIR</button></a>
                    </div>
                    <?php     
                     $teste[] = $linha['exclusao_logic'];
                     foreach ($teste as $value) {
                         
                         switch ($value) {
                             case "2":

                                 $value = " EM ANALISE";
                                 $valor = 2;
                                 break;
                             case "3":

                                 $value = "PENDETE";
                                  $valor = 3;
                                 break;
                             case "5":

                                 $value = "INDEFERIDO";
                                  $valor = 5;
                                 break;
                             case "4":

                                 $value = "DEFERIDO";
                                  $valor = 4;
                                 break;

                             default:
                                 break;
                         }
                    
           }
                $date = date('d/m/Y');
             
 ?>
                </td>
        
                <td>
                    <form action="pcController.php" method="get">
                    <label for="status" class="col-md-3 control-label"></label>
                   <div>
                       <select align="center" style="color :black" name="situacao" class="form-control">
                                                    <option value="<?php echo $valor?>" ><?php echo $value ?></option>
                                                    <option value="3">PENDENTE </option>
                                                    <option value="2">EM ANALISE</option>
                                                    <option value="5">INDEFERIDO</option>
                                                    <option value="4">DEFERIDO</option>
                                                    
                                                </select>
                                            </div>
                        <div class="form-group">
                                            
                                            <div class="input-group">
                                                <input type="hidden" class="form-control"size="10" name="codigo" id="descricao" value="<?php echo $linha['COD']?>">
                                                <input type="hidden" class="form-control"size="10" name="data" id="descricao" value="<?php echo $date?>">

                                                <div style="padding: 3px;">  <button class="btn btn-info" type="submit">OK</button></div>
                                                                        
                                            </div>
                                        </div>
                    </form>
                   
                    
           
                </td>
                  <?php } mysql_close($con);?>
	 </tr>
	
</table>
                        
<br>
<?php 
	include 'rodape.php';
?>
</div>
</td>
</tr>
</table>
</div>
    </div>
</body>
</html>


