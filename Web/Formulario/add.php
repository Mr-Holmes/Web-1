<?php
session_start();

if(!isset($_SESSION['tarefa'])){
	$_SESSION['tarefa'] = array();
} 
if(isset($_POST['titulo'])){
	$_SESSION['titulo'] = $_POST['titulo'];
	array_push($_SESSION['tarefa'],$_POST['titulo']);
}

if(!isset($_SESSION['tarefa2'])){
	$_SESSION['tarefa2'] = array();
}

if(isset($_POST['conteudo'])){
	array_push($_SESSION['tarefa2'],$_POST['conteudo']);
}


// if(isset($_POST'titulo'])){
// 	$_SESSION['tarefa'] = $_POST['titulo'];

// }
// if(isset($_POST['conteudo'])){
// 	$_SESSION['tarefa'] = $_POST['conteudo'];
// 		array_push($_SESSION['tarefa']);
// }
// echo "oi";
header('location: index.php');
?>
