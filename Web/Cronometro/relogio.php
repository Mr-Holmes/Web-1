<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	body{
		background-color: gray;		
	}

	p{
		text-align: center;
		font-size: 40px;
	}
</style>
	<title>Relogio</title>
	<meta charset="utf-8">
			<script> 

			function tempo() {
				
			var date =  new Date();
			var horas = date.getHours();
			var minutos = date.getMinutes();
			var segundos = date.getSeconds();

			if (horas < 10 ) { horas = "0" + horas; }
				if (minutos < 10) { minutos =  "0" + minutos; }
					if (segundos < 10) { segundos = "0" + segundos; }

						document.getElementById('tempo').innerHTML = horas  + " : " + minutos +  " : " + segundos;
						window.setInterval("tempo()",1000);
			}
			</script>
</head>
	<body onload="tempo()">
		<p id="tempo"></p>
	</body>
</html>