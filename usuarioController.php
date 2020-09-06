<?php
if (isset($_POST["funcao"]) || isset($_GET["funcao"])) {
	$funcao = "";
	if (isset($_GET["funcao"])) {
		$funcao = $_GET["funcao"];
	} elseif (isset($_POST["funcao"])) {
		$funcao = $_POST["funcao"];
	}
	include_once 'config.php';
	$con = abrirConexao();
	mysql_set_charset('UTF8', $con);

	$origens = array('"', "'", '/', '*', 'true', 'false', '=', 'where', 'drop', 'delete', 'from', 'WHERE', 'DELETE', 'FROM', 'DROP', 'SELECT');
	$distino = "";
	$cont = 0;
	switch ($funcao) {
	case "validaUsuario":
		$usuario = str_replace($origens, $distino, $_POST['usuario']);
		$senha = str_replace($origens, $distino, $_POST['senha']);
		$senha = md5($senha);
		$sql = "select * from usuarios where login = '$usuario' and senha = '$senha' and exclusao_logica = 1";
		$resultado = mysql_query($sql);

		$cont = 0;
		while ($linha = mysql_fetch_array($resultado)) {
			$cont = $cont + 1;
		}
		echo $cont;
		if ($cont != 0) {
			$sql = "select * from usuarios where login = '$usuario' and senha = '$senha' and exclusao_logica = 1";
			$resultado = mysql_query($sql);
			while ($usuario = mysql_fetch_array($resultado)) {
				session_start();
				$_SESSION["CODIGO"] = $usuario['codigo_usuario'];
				$_SESSION["NOME"] = $usuario['nome'];
				$_SESSION["LOGIN"] = $usuario['login'];
				$_SESSION["SENHA"] = $usuario['senha'];
				mysql_close($con);
				echo "<script>window.location='listaPC.php';alert('BEM VINDO');</script>";
			}
		} elseif ($cont == 0) {
			mysql_close($con);
			echo "<script>window.location='login.php';alert('SENHA OU LOGIN INVALIDOS');</script>";
		}
		break;
	case "salvarUsuario":
		$nome = str_replace($origens, $distino, $_POST['nome']);
		$login = str_replace($origens, $distino, $_POST['login']);
		$senha = str_replace($origens, $distino, $_POST['senha']);
		$senha = md5($senha);
		$sql = "insert into usuarios (nome,login,senha, exclusao_logica) values ('$nome','$login','$senha',1)";
		$resultado = mysql_query($sql);
		if ($resultado) {
			mysql_close($con);
			echo "<script>window.location='login.php';alert('USUARIO CADATRADO COM SUCESSO');</script>";
		} else {
			mysql_close($con);
			echo "<script>window.location='cadastraUsuario.php';alert('OCORREU UM ERRO AO CADASTRAR USUARIO');</script>";
		}
		break;
	case "deletar":
		$codigoUsuario = $_GET["codigoUsuario"];
		$update = "update usuarios set exclusao_logica = 0 where codigo_usuario = $codigoUsuario";
		$resultado = mysql_query($update);
		if ($resultado) {
			mysql_close($con);
			echo "<script>window.location='listarUsuario.php';alert('USUARIO DELETADO COM SUCESO');</script>";
		} else {
			mysql_close($con);
			echo "<script>window.location='cadastraUsuario.php';alert('OCORREU UM ERRO AO DELETAR O USUARIO');</script>";
		}
		break;
             case "editarUsuario":
                 $codigoUsuario = $_POST["codigoUsuario"];
		$nome = str_replace($origens, $distino, $_POST['nome']);
		$login = str_replace($origens, $distino, $_POST['login']);
		$senha = str_replace($origens, $distino, $_POST['senha']);
		$senha = md5($senha);
		$sql = "update usuarios set nome = '$nome', login = '$login', senha = '$senha' where codigo_usuario = $codigoUsuario";
		$resultado = mysql_query($sql);
		if ($resultado) {
			mysql_close($con);
			echo "<script>window.location='listarUsuario.php';alert('USUARIO ATUALIZADO COM SUCESSO');</script>";
		} else {
			mysql_close($con);
			echo "<script>window.location='cadastraUsuario.php';alert('OCORREU UM ERRO AO ATUALIZAR USUARIO');</script>";
		}
		break;   
	case "sair":
		session_start();
		session_destroy();
		header("Location: login.php");
		break;
	}
}
?>

