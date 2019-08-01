<?php
session_start();
include_once("conexao.php");

$login = filter_input(INPUT_POST, 'usuario');

if ($login) {

$usuario = filter_input(INPUT_POST, 'usuario');
$senha = filter_input(INPUT_POST, 'senha');

if((!empty($usuario)) AND (!empty($senha))) {
	
	//echo password_hash("$senha", PASSWORD_DEFAULT);
	
	$resultado = "SELECT usuario_id, usuario, senha FROM usuarios WHERE usuario ='$usuario' LIMIT 1";
	$exeresultado = mysqli_query($conexao, $resultado);
		if ($exeresultado) {
			$lendousu = mysqli_fetch_assoc($exeresultado);
			
			if (password_verify($senha, $lendousu['senha'])){
				
				$_SESSION['usuarioid'] = $lendousu['usuarioid'];
				$_SESSION['usuario'] = $lendousu['usuario'];
				header("Location:index.php");
				
			}else{
				$_SESSION['msg'] = "<center style='color:red;'>Login ou Senha incorreta</center>";
				header("Location: login.php");
			}
		}
	
}else {
	$_SESSION['msg'] = "<center style='color: red;'>Login ou Senha incorreta</center>";
	header("Location: login.php");
}

	
}else{
	
	$_SESSION['msg'];
	header("Location: login.php");
}

?>