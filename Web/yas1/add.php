<?php 

	session_start();

	$titulo = $_POST['titulo'];
	$conteudo = $_POST['conteudo'];


	$tarefas = array();

	if(isset($titulo)){
		$tarefas['titulo'] = $titulo;
	}
	else{
		$tarefas['titulo'] = ' ';
	}

	if (isset($conteudo)) {
		$tarefas['conteudo'] = $conteudo;
	}
	else{
		$tarefas['conteudo'] = ' '; 
	}

	$_SESSION['tasks'][] = $tarefas;

	$tasks = $_SESSION['tasks'];
	// if(!isset($_SESSION['tasks'])){
	// 		$_SESSION['tasks'] =  array();;

	// }



	// array_push($_SESSION['tasks'], $titulo);
	// array_push($_SESSION['tasks'], $conteudo);

	// var_dump($_SESSION);

	header("location: index.php");
 ?>