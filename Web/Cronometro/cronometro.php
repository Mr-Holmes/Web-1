

<!DOCTYPE html>
<html>
		<head>

			<title> Cronometro & Relogio</title>
				<link rel="stylesheet" type="text/css" href="cronoStyle.css">
				<script type="text/javascript" src="cronometro.js" ></script>
		</head>
		<body >
						<div id="cronometro">
							<div class="time" id="Horas">00</div>
							<div class="time" id="Minutos">:00</div>
							<div class="time" id="Segundos">:00</div>
							<div class="time" id="Centesimas">:00</div>
							<input type="button" class="boton" id="inicio" value="Start &#9658;" onclick="inicio();">
							<input type="button" class="boton" id="parar" value="Stop &#8718;" onclick="parar();" disabled>
							<input type="button" class="boton" id="continuar" value="Resume &#8634;" onclick="inicio();" disabled>
							<input type="button" class="boton" id="reinicio" value="Reset &#8635;" onclick="reinicio();" disabled>
						</div>
		</body>
</html>




