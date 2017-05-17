<?php 
 	 	session_start();
 	 	
 	 		unset($_SESSION['tarefa'][$_GET['id']]);
 			unset($_SESSION['tarefa2'][$_GET['id']]);

 			header("location:index.php");
 	 		 ?>