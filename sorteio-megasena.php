<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sorteio Megasena</title>
</head>
<body>
<!-- tag html -->
	<h1><b>SORTEIO DA MEGASENA</b></h1>

	<hr>

	<br>

	<form method="post">
		<fieldset>
			<legend><b>Informe à quantidade de dezenas</b></legend>
			<input type="number" name="dezenas">
			<input type="submit" name="Enviar">
		</fieldset>
	</form>

<!-- código php -->
	<?php
		$dezenas = $_POST["dezenas"];

		if("$dezenas" <= 0){
			echo "<h3 style='color:red;>Informe um valor maior que 0.</h3>";
		}

		echo "<br><table border=0 style='width:100%'>";
		echo "<tr>";

		for($i=0; $i<=$dezenas; $i++){			
			echo "<th style='background-color:#F0F8FF'>";
			echo "<h1>" . mt_rand(0, 90) . "</h1>";
			echo "</th>";
		}

		echo "</tr>";
		echo "</table>";

	?>
</body>
</html>
