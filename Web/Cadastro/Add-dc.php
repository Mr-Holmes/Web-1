<?php 
	session_start();

	if(!isset($_SESSION['Hero'])){
		$_SESSION['Hero'] = array();
	}

	if(isset($_POST['nome']) && isset($_POST['poder'])){
		$nome = $_POST['nome'];
		$poder = $_POST['poder'];

		array_push($_SESSION['Hero'],array($nome, $poder));
	}

	header("location:Dc.php");
 ?>