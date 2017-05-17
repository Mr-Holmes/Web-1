<?php 

session_start();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$logins = array();

if(isset($usuario)){
	$logins['usuario'] = $usuario;
}

if (isset($senha)) {
	$logins['senha'] = $senha;
}
 ?>