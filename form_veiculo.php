<?php
	include("menu.php");
?>

<!DOCTYPE html>

<html>

	<head>
		<title></title>
		<meta charset="utf-8"/>
	</head>


	<body>

		<fieldset>
			<legend><h2>Inserir um novo veiculo</h2></legend>
			<form action="insere_veiculo.php" method="post">
				<input type="text" name="placa" required="required" placeholder="Insira a Placa" /><br/><br/>

				<input type="text" name="marca" required="required" placeholder="Insira a marca do veiculo" /><br/><br/>

				<input type="text" name="modelo" required="required" placeholder="Insira o modelo do veiculo" /><br/><br/>

				<input type="number" name="ano" required="required" placeholder="Insira o ano do veiculo" /><br/><br/>

				<input type="number" name="km" required="required" placeholder="Insira os km" /><br/><br/>

				<input type="number" name="valor_diaria" required="required" placeholder="Insira o valor da diaria" /><br/><br/>

				<button>Enviar</button>
			</form>
		</fieldset>
	</body>

</html>