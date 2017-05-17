<?php 

$host = "localhost";
$user = "root";
$pass = " ";
$banco = "cadastro";
$conexao = mysql_connect($host $user $pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error()); 

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function sucesso() {
			setTimeout("window.location='painel.php'", 5000);
		}

		function falha(){
			setTimeout("window.location='index.php'",5000);
		}
	</script>
</head>
	<body>

		<?php 
		// session_start();

		$nick = $_POST['nick'];
		$senha = $_POST['senha'];

		$sql = mysql_query("SELECT * FROM usuarios WHERE email = '$nick' and senha = '$senha'") or die(mysql_error());
		$row = msql_num_rows($sql);
		if($row > 0){
				session_start();
				$_SESSION['nick'] = $_POST['nick'];
				$_SESSION['senha'] = $_POST['senha'];
				echo "Autenticado, Aguarde um instante";
				echo "<script>sucesso()</script>";
		}

		else{
			echo "Não Autenticado";
			echo "<script>falha()</script>";
		}
		 ?>
	</body>
</html>