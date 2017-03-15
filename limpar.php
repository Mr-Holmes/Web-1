<?php 
 	 	session_start();
 	 	
 	 		unset($_SESSION['tarefa']);
 			unset($_SESSION['tarefa_1']);

 			header("location:formulario.php");
 	 		 ?>