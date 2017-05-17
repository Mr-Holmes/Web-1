<?php 
session_start();

if(!isset($_SESSION['usuario'])){
	$_SESSION['usuario'] = array();
}
	$usuario = $_SESSION['usuario'];


$frase = array(
"You shall not Pass!!",
"Choque do Trovão!!",
"Você conhece a iniciativa Vingadores!!",
"Eu sou Batman... NANANANANANA BATMAAAAN",
"Use a Varinha Harry... Muito bem, 50 pontos para Grifindoria",
"Poooo... por isssss..sso éééé sóooo... pe..pe..pe..pesssoal"
	);

$editora = "Dc";
$heroi = "Batman";
$vilao = "Loki"
 ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Formulario Btn</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
	<form action="add.php" method="POST">
		
		<fieldset>
			<legend>Cadastro</legend>
			<input type="text" name="nome" placeholder="Nome">
			<input type="text" name="mail" placeholder="E-mail">
		</fieldset>

		<fieldset>
			<legend>Radio buttons</legend>
				<div style="font-style: italic;">
				<p>Dc ou Marvel?</p>
					<input type="Radio" name="form_1" value="Dc" <?=($editora == "Dc") ? "checked" : null; ?>>DC
				<input type="Radio" name="form_1" value="Marvel" <?= ($editora == "Marvel") ? "checked" : null; ?> >Marvel
				</div>

				<div class="left">
					<p>Qual é seu Heroi predileto?</p>
					<input type="Radio" name="form" value="Batman"  <?= ($heroi == "Batman") ? "checked" : null; ?> >Batman <br>
					<input type="Radio" name="form" value="Superman" <?= ($heroi == "Superman") ? "checked" : null; ?>>Superman <br>
					<input type="Radio" name="form" value="Flash" <?= ($heroi == "Flash") ? "checked" : null; ?>>Flash <br>
					<input type="Radio" name="form" value="Wolverine" <?= ($heroi == "Wolverine") ? "checked" : null; ?> >Wolverine <br>
					<input type="Radio" name="form" value="Mulher-Maravilha"<?= ($heroi == "Mulher-Maravilha") ? "checked" : null; ?> >Mulher-Maravilha <br>
					<input type="Radio" name="form" value="Homem de Ferro" <?= ($heroi == "Homem de Ferro") ? "checked" : null; ?>>Homem de Ferro <br>
					<input type="Radio" name="form" value="Capitão America" <?= ($heroi == "Capitão America") ? "checked" : null; ?> >Capitão America <br>
				</div>

				<div class="center">
				<p>Qual é seu Vilão Predileto</p>
				<input type="Radio" name="form_2" value="Loki" <?= ($vilao == "Loki") ? "checked" : null; ?> >Loki <br>
				<input type="Radio" name="form_2" value="Lex" <?=  ($vilao == "Lex") ? "checked" : null;?> >Lex Luthor <br>
				<input type="Radio" name="form_2" value="Thanos" <?= ($vilao == "Thanos") ? "checked" : null; ?> >Thanos <br>
				<input type="Radio" name="form_2" value="Coringa" <?= ($vilao == "Coringa") ? "checked" : null; ?> >Coringa <br>
				<input type="Radio" name="form_2" value="Magento" <?= ($vilao == "Magneto") ? "checked" : null; ?> >Magneto <br>
				<input type="Radio" name="form_2" value="Exterminador" <?= ($vialo == "Exterminador") ? "checked" : null; ?> >Exterminador <br>
				<input type="Radio" name="form_2" value="Dr.Destino" <?= ($vilao == "Dr.Destino") ? "checked" : null; ?> >Dr. Destino <br>
				<input type="Radio" name="form_2" value="Pinguim" <?= ($vilao == "Pinguim") ? "checked" : null; ?> >Pinguim <br>
				</div>

		</fieldset>

		<fieldset>
			<legend>Check Box</legend>
			<div>
				<p>Qual console Mais costuma joga?</p>
				<input type="checkbox" name="PlayStation" value="on">PlayStation
				<input type="checkbox" name="Xbox" value="on">Xbox
				<input type="checkbox" name="WillU" value="on">WillU
				<input type="checkbox" name="PC" value="on">Pc
			</div>

			<div>
			<p>Qual tipo Jogo você costuma jogar?</p>
			<input type="checkbox" name="FPS" value="on"> FPS <br>
			<input type="checkbox" name="MMORPG" value="on"> MMMORPG <br>
			<input type="checkbox" name="HACKING-SLASHING" value="on">HACKING-SLASHING<br>
			<input type="checkbox" name="SURVIVEL" value="on">SURVIVEL <br>
			<input type="checkbox" name="TERROR" value="on">TERROR <br>
			</div>
		</fieldset>	

		<fieldset>
			<legend>Selects</legend>
			<select multiple name="lema[]" required="" >
			<option>Escolha uma frase!</option>
			<?php foreach ($frase as $key => $value): ?>
				<option value="valor -<?=$key?>"><?= $value  ?></option>
				<?php endforeach ?>
			</select>
		</fieldset>
		<input type="submit" name="btn" value="Btn mulesta">	
	</form>
<table>
	<tr>
		<th>Nome</th>
		<th>E-mail</th>
	</tr>
		<?php
		foreach ($_SESSION['usuario'] as $id => $value):
			$nome = $value[0];
			$mail = $value[1];
		 ?>
		 <tr>
		 	<td><?= $nome ?></td>
		 	<td><?= $mail ?></td>
				<?php endforeach ?>
		 </tr>
</table>
	</body>
</html>