<?php


 if (isset($_GET["codigo"]) && $_GET["situacao"]) {
    include_once './config.php';
    $con = abrirConexao();
    mysql_set_charset('UTF8', $con);
    $codigo = $_GET["codigo"];
    echo 'teste1';
    if (isset($_GET["situacao"])) {
        //data do sistema
        $status = $_GET['situacao'];
        $date = date('d/m/Y');
       
        
        if ( $status ==2) {
              $update = "update cadastro set exclusao_logic = '$status' where COD = $codigo";
             $resultado = mysql_query($update);
            echo "<script>window.location='listaPC.php';alert('EM ANALISE');</script>";
                mysql_close($con);
        }elseif ($status == 3) {
           echo $date;
            $update = "update cadastro set exclusao_logic = '$status', data2 = '$date' where COD = $codigo";
             $resultado = mysql_query($update);
              echo "<script>window.location='listaPC.php';alert('COM PENDENCIA!');</script>";
             
                mysql_close($con);
        }
        elseif ($status == 4) {
            
             $update = "update cadastro set exclusao_logic = '$status', data2 = '$date' where COD = $codigo";
               echo $resultado = mysql_query($update);              
               echo "<script>window.location='listarConcluido.php';alert('DEFERIDO');</script>";
                mysql_close($con);
        }
        elseif ($status == 5) {
           
            $update = "update cadastro set exclusao_logic = '$status', data2 = '$date' where COD = $codigo";
             $resultado = mysql_query($update);
              echo "<script>window.location='listaPC.php';alert('INDEFERIDO');</script>";
                mysql_close($con);
        }
        
        else {
            mysql_close($con);
            echo "<script>window.location='listaPC.php';alert('NÃO FOI ATUALIZADO NO SISTEMA');</script>";
        }
    }
}
?>
