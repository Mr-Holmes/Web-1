<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="web.css">
	<title>Tabela</title>
</head>
<body>

<h1> Perguntas </h1>
	<p>
		
	<tr>

			<?php

			/*$nota1 = 5.0;
			$nota2 = 5.0;
			$media = ($nota1 + $nota2)/2;
			echo $media;*/

			//$aluno = ["lee","lolzinho","Ms.boy","obd","html"];
		 /*$aluno = array(
		 	array("lee",16,),
		 	array("lolzinho",456),
		 	array("Ms.boy",7)
		 	);

			for($i = 0; $i < count($aluno); $i++){
				for($j = 0; $j < count($aluno); $j++){
				echo "<td>".$aluno[$i][$j]."</td>";
				}
			}*/
				//$arr = array();
				//$arr["Aluno"] = "OBD";

				echo $_GET["name"];
				
			?>
<br>
				<?php
					echo $_GET["age"];
				?>
<br>	
	</p>
</body>
</html>