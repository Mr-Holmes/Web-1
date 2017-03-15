<?php
session_start()
?>

<!DOCTYPE html>
<html>
<head>
	<title>Fomulario</title>
	<style type="text/css">
		body{
			background-color: orange;
		}
	</style>
</head>
<body>
 	<form action="identificador.php" method="POST">
 		<fieldset>
 			<legend>Insira seus dados</legend>
 				<br>
 				Nome:<br>
 					<input type="text" name="nome">
 					<br>
 				Idade: <br>
 					<input type="text" name="idade">
 					<br>
 					<input type="submit" name="">
 		</fieldset>
 		
 	</form>

 	<?php 	
 		if(isset($_SESSION['tarefa']) && isset($_SESSION['tarefa_1'])){
 			echo "<table> 
 			<tr> 
 				<th>Nome</th>
 				<th>Idade</th>
 			</tr>";
 			for($i = 0; $i < count($_SESSION['tarefa']);$i++){
 				echo "<tr>
 					<td>".$_SESSION['tarefa'][$i]."</td>
 					<td>".$_SESSION['tarefa_1'][$i]."</td>
 					</tr>";

 			}
 			echo "</table>";
 		}

 		// unset($_SESSION['tarefa']);
 		//unset($_SESSION['tarefa_1']);
 	 ?>
 	 <a href="limpar.php">Limpar</a>
 	
 	 		
</body>
</html>