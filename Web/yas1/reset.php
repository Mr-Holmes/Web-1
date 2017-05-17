<?php 
session_start();
unset($_SESSION['tarefa']); 
header("location:index.php");
?>