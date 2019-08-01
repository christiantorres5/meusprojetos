<?php
session_start();
?>

<!DOCTYPE html>

	<html>
		
		<head>
			<meta charset="UTF-8"/>
			<link rel="stylesheet" href="style.css">
			<link rel="shortcut icon" href="favicon.ico" >
			<link rel="icon" type="image/gif" href="animated_favicon1.gif" >
			<link rel="shortcut icon" href="favicon.ico" >
			<title>BOPE - Cadastro</title>
			
		</head>
		
		<body>
			<div class="formulario">
				<div class="titulo">
					<div class="logo"></div>
					<h2>Cadastro de Policiais</h2>
					
					<?php
					
						if(isset($_SESSION['aviso'])) {
							
							echo $_SESSION['aviso'];
							unset ($_SESSION['aviso']);
							echo "<meta HTTP-EQUIV='refresh' CONTENT='2;URL=index.php'>";
						}
						
					?>
					
					
	
				<form method="POST" action="envia.php">
					
					<div class="campos" >
						<div class="nick mod">
							<label class="label">Nick:</label>
							<input type="text" class="input" name="nick">
						</div>
					
						<div class="patente mod" >
							<label class="label">Patente:</label>
							<input type="text" class="input" name="patente">
						</div>
					
						<div class="oficial mod">
							<label class="label">Oficial Responsável:</label>
							<input type="text" class="input" name="oficial">
						</div>
					
						<div class="treinamento mod">
							<label class="label">Treinamento Atual:</label>
							<input type="text" class="input" name="treinamento">
						</div>
						
						<center>    
						    <input style=
						    
						        "width:50%;
						         height:40px;
						         background-color:#0270bf;
						         border:0px solid #0270bf;
						         font-size:16px;
						         color:#ffffff;
						         border-radius:10px 10px 10px 10px;
						        "
						        
						    type="submit" value="Cadastrar"> 
						    
						</center>
					
				</div>
				
			</form>
			
				<?php
					
						if(!empty($_SESSION['usuario'])) {
							
							header("Location:index.php");
							
						}else{
							
							$_SESSION['msg'] = "<center style='color:red';>Permissão Negada</center>";
							header("Location:login.php");
						}
					?>
			
		</body>
		
	</html>