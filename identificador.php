<?php

session_start();
if(!isset($_SESSION['tarefa'])){
	$_SESSION['tarefa'] = array(); 
	
}
	if(isset($_POST['nome'])){
			$_SESSION['nome'] = $_POST['nome'];
			array_push($_SESSION['tarefa'], $_POST['nome']);

	}
if(!isset($_SESSION['tarefa_1'])){
	$_SESSION['tarefa_1'] = array(); 
	
} 
	if(isset($_POST['idade'])){
		array_push($_SESSION['tarefa_1'],$_POST['idade']);
	}
	header("location:formulario.php");

?>

