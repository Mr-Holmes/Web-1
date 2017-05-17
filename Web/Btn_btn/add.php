<?php 
session_start();

if(!isset($_SESSION['usuario'])){
	$_SESSION['usuario'] = array();
}

if(isset($_POST['nome']) && isset($_POST['mail'])){
	$nome = $_POST['nome'];
	$mail = $_POST['mail'];

	array_push($_SESSION['usuario'],array($nome,$mail));
}

$_POST['form_1'] = (isset($_POST['form_1']) ) ? $_POST['form_1'] : null;
$_POST['form'] = (isset($_POST['form']) ) ? $_POST['form'] : null;
$_POST['form_2'] = (isset($_POST['form_2']) ) ? $_POST['form_2'] :  null;


$_POST['PlayStation'] = (isset($_POST['PlayStation']) ) ?  true : null;
$_POST['Xbox'] = (isset($_POST['Xbox']) ) ?  true : null;
$_POST['WillU'] = (isset($_POST['WillU']) ) ?  true : null;
$_POST['PC'] = (isset($_POST['PC']) ) ?  true : null;


$_POST['FPS'] = (isset($_POST['FPS'])) ? true :  null;
$_POST['MMORPG'] = (isset($_POST['MMORPG'])) ? true :  null;
$_POST['HACKING-SLASHING'] = (isset($_POST['HACKING-SLASHING'])) ? true :  null;
$_POST['SURVIVEL'] = (isset($_POST['SURVIVEL'])) ? true :  null;
$_POST['TEERROR'] = (isset($_POST['TEERROR'])) ? true :  null;


var_dump($_POST);
// header("location:Index.php");
 ?>