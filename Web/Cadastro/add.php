<?php 
	session_start();

if(!isset($_SESSION['hero'])){
	$_SESSION['hero'] = array();
}

if(isset($_POST['nome']) && isset($_POST['poder'])){
	
	$nome = $_POST['nome'];
	$poder = $_POST['poder'];

	array_push($_SESSION['hero'],array($nome, $poder));
}

header("location:Marvel.php");
 ?>