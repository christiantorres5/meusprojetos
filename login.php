<?php
session_start();
?>

<!DOCTYPE html>

	<html>
		
		<head>
			<meta charset="UTF-8"/>
			<link rel="stylesheet" href="style4.css">
			<link rel="shortcut icon" href="favicon.ico" >
			<link rel="icon" type="image/gif" href="animated_favicon1.gif" >
			<link rel="shortcut icon" href="favicon.ico" >
			<title>BOPE - Login</title>
			
		</head>
		
		<body>
				<div class="titulo">
					<div class="logo"></div>
					<h2>Acesso ao Sistema:</h2>
					<?php
						if (isset($_SESSION['msg'])){
							echo $_SESSION['msg'];
							unset ($_SESSION['msg']);
							echo "<meta HTTP-EQUIV='refresh' CONTENT='1;URL=login.php'>";
						}
					?>
					
				<form method="POST" action="logando.php">
					
					<div class="campos" >
						<div class="login mod">
							<center>
								<label class="label">Usuário:</label>
							</center>
							
							<input type="text" class="input" name="usuario">
						</div>
					
						<div class="senha mod" >
							<center>
								<label class="label">Senha:</label>
							</center>
							
							<input type="password" class="input" name="senha">
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
						        
						    type="submit"> 
						    
						</center>
						
				</div>
				
			</form>
						
		</body>
		
	</html>