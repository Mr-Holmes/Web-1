<?php 
session_start();

if(!isset($_SESSION['login'])){
	$_SESSION['login'] = array();
}

if(isset($_POST['nick']) && isset($_POST['senha'])) {
		$nick = $_POST['nick'];
		$senha = $_POST['senha'];

		array_push($_SESSION['login'], array($nick,$senha));

}
header("location:index.php");

 ?>