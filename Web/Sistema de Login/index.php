<?php
session_start();  

if(!isset($_SESSION['login'])){
	$_SESSION['login'];
}

$login = $_SESSION['login'];
?>

<!DOCTYPE html>
<html>
		<head>
			<meta charset="utf-8">
			<title>Login</title>
			<link rel="stylesheet" type="text/css" href="estilo.css">
		</head>
	<body>
	
		<form action="centro	.php" method="POST" class="id">
				<fieldset >
					<div id="posicao">
						<p>	login </p>
						<input type="text" name="nick" class="l"> 
						<p>Senha</p>
						<input type="password" name="senha"><br>
						<input type="submit" name="" value="Entrar">
					</div>	
				</fieldset>
			</form>
				<!-- <a href="cadastrar.php"><input type="submit" name="" ></a> -->
<p id="lorem">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</body>
</html>