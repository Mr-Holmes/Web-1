
<?php 
session_start();
	if(!isset($_SESSION['Hero'])){
		$_SESSION['Hero'] = array();
	}
		$Hero = $_SESSION['Hero'];


$city = array(
	"Gotham",
	"Star City",
	"Metropolis"
	);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Cadastro</title>	
 	<meta charset="utf-8">
 	<style type="text/css">
 		.btn{
 			background-color:yellow; 
 		}

 		form{
 			text-align: center;
 		}
 	</style>
 </head>
	 <body>
	 	<form action="Add-dc.php" method="POST">
	 		<fieldset>
	 			<legend>Cadastros</legend>
	 				Nome(Alter-ego):
	 				<br>
	 				<input type="text" name="nome" placeholder="Nome" required="">
	 				<br>
	 				Poder(es):
	 				<br>
	 				<input type="text" name="poder" placeholder="Poderes" required="">
	 				<br>
	 				Anos no oficio:
	 				<input type="number" name="" placeholder="Anos de Oficio">

	 				Cidade:
	 				<select name="" required="">
	 					<option>Escolha uma cidade</option>
	 					<?php foreach ($city as $id => $value): ?>
			 					<option value="valor-<?=$id?>"><?=$value?></option> 						
	 					<?php endforeach ?>
	 				</select>
	 				<br>
	 				<br>
	 				<input type="submit" name="" class="btn">
	 		</fieldset>
	 	</form>
	 <table> 
		 <tr> 
	 		<th>Alter-ego</th> 
	 		<th> poder(es) </th> 
	 	 </tr>
<?php
	 	foreach ($_SESSION['Hero'] as $id => $value): ?>
<?php
	 				$hero = $value[0];
	 				$poder = $value[1];
?>
	 		<tr>
	 			<td><?= $hero ?></td>
	 			<td><?= $poder ?></td>
	 		</tr>

	 		<?php endforeach ?>
	 	 </table>
	 </body>
 </html>