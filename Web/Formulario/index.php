<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<script>
function remover(){
	alert("tarefa removida!!!");
}
 window.addEventListener("load", function() {
                console.log("load");

            window.addEventListener("DOMContentLoaded", function() {
                console.log("DOM loaded");

                var h1 = document.getElementById('demo');
              
                var i = 0;

                h1.addEventListener('mouseover', function() {
                    h1.style.color = 'red';
                    console.log('entrando no p: ' + i + ' pixles');
                    i++;
                });
                h1.addEventListener('mouseout', function() {
                    h1.style.color = 'black';
                });

			        });
            });


	function alertar() {
		alert("teste");
			}

	</script>

</head>
	<body onload="load()">

	<h1 id="demo"> Desenvolvimento Web 1 </h1>

	<form action="add.php" enctype="multipart/form-data" method="POST">
	<fieldset>	
		<legend>Agende suas tarefas</legend>
				Titulo <br>
				<div class="id"> <input type="text" name="titulo"> </div> <br>
				Conteudo <br>
				 <input type="text" name="conteudo"><br>
				<!-- <textarea name = "conteudo" cols="30" rows="10" ></textarea> <br> -->
				<input type="submit" name="">
	</fieldset>
	</form>
	<p class="reset"><a href="reset.php"> reset</a>


		<?php
	// var_dump($_SESSION);
		echo "<table> <tr> <th>tarefas</th> </tr>";
	 			if(isset($_SESSION['tarefa']) && isset($_SESSION['tarefa2'])){

						for($i = 0; $i < count($_SESSION['tarefa']);$i++){
							?>
								<tr>
									<?php
							 echo "<td>".$_SESSION['tarefa'][$i]."</td>
									<td>".$_SESSION['tarefa2'][$i]."</td>";
									?>
									<td><a onclick="remover()" href="excluir.php?id=<?=$i?>" title="remover tarefa" data-title = "oi"> Excluir </a>
					  				<?php
												}
												echo "</table>";
														}
													?>

	</body>
</html>
