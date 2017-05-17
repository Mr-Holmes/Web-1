<?php 
	session_start();

	unset($_SESSION['tasks'][$_GET['id']]);

	header("location: index.php");
	
 ?>