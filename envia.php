<?php

session_start();

include_once("conexao.php");

$nick=filter_input(INPUT_POST,'nick');
$patente=filter_input(INPUT_POST,'patente');
$oficial=filter_input(INPUT_POST,'oficial');
$treina=filter_input(INPUT_POST,'treinamento');

$cadastrou="INSERT INTO batalhao (pessoa, paten, oficial, ta, data) VALUES ('$nick','$patente','$oficial','$treina',NOW())";
$conexao_cadas=mysqli_query($conexao,$cadastrou);

if(mysqli_insert_id($conexao)){
	$_SESSION['aviso'] = "<center><p style='color: green;'>Cadastro realizado com sucesso</p></center>";
	header("Location:index.php");
	
	
}else{
	$_SESSION['aviso'] = "<center><p style='color:red;'>Cadastro não realizado com sucesso</p></center>"; 
	header("Location:index.php");
}

?>
