<!DOCTYPE html>
<html>
	<?php 

		session_start();
	 ?>
	<head>
		<meta charset="utf-8">
		<title>Task List</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<h1>Desenvolvimento Web</h1>
		<form action="add.php" method="POST">
			<label>Título: <br></label>
				<input type="text" name="titulo">
			<label>Contéudo <br></label>
				<textarea name="conteudo" rows="4" cols="50"></textarea>
				<input type="submit" value="Adicionar Tarefa">
		</form>

		<table>
			<?php if(!isset($_SESSION['tasks']))?>
			<?php foreach($_SESSION['tasks'] as $i => $tasks) : 
			?>
			<a href="remove.php?id=<?=$i?>">Remover</a>

					<td> <?=$tasks?> </td>

				

			 <?php endforeach ?>
		</table>
			
	</body>
</html>