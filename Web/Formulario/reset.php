<?php
	session_start();

	unset($_SESSION['tarefa']);
	unset($_SESSION['tarefa2']);

	header("location: index.php");

	?>