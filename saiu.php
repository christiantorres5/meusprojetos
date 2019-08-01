<?php

session_start();
unset($_SESSION['usuario'], $_SESSION['usuarioid']);

$_SESSION['msg'] = "<center style='color:green';>Deslogado com Sucesso</center>";
header("Location:login.php");

?>