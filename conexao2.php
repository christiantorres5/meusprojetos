<?php
echo '<link rel="stylesheet" type="text/css" href="style3.css"/>';
define('HOST','localhost');
define('USUARIO','id10233550_mctbope');
define('SENHA','bopehabbomct852');
define('DB','id10233550_alistados');

$conexao=mysqli_connect(HOST, USUARIO,SENHA,DB) or die ('Impossível Conectar');

$nick = $_POST['nick'];
$pesquisou = "SELECT * FROM pessoas WHERE nick LIKE '$nick' LIMIT 5";
$pesquisa = mysqli_query($conexao, $pesquisou);

while ($linha = mysqli_fetch_array($pesquisa)){
	echo '<div class="logo"></div>';
	echo '<font size="5"><div class="titulo"><h2 size="30">Dados Cadastrados:</font></h2>';
	echo '<center><font size="4" color="green">Patente: </font></center><div class="patente">'.$linha['patente'].'</div>';
	echo '<center><font size="4" color="green">Responsável: </font></center><div class="resp">'.$linha['respon'].'</div>';
	echo '<center><font size="4" color="green">Treinamento: </font></center><div class="trei">'.$linha['treiatu'].'</div>';
	echo '<center><font size="4" color="green">Data: </font></center><div class="data">'.$linha['now'].'</div>';
	echo "<meta HTTP-EQUIV='refresh' CONTENT='8;URL=verificacao.php'>";
	
}

?>