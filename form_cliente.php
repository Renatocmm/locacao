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
			<legend><h2>Inserir um novo cliente</h2></legend>
			<form action="insere_cliente.php" method="post">

				<input type="number" name="cpf" required="required" placeholder="Insira o CPF" /><br/><br/>

				<input type="text" name="nome" required="required" placeholder="Insira o nome" /><br/><br/>

				<input type="text" name="endereco" required="required" placeholder="Insira o endereço" /><br/><br/>

				<input type="text" name="bairro" required="required" placeholder="Insira o bairro" /><br/><br/>

				<input type="text" name="cidade" required="required" placeholder="Insira a cidade" /><br/><br/>

				<input type="text" name="estado" required="required" placeholder="Insira o estado" /><br/><br/>

				<input type="number" name="cep" required="required" placeholder="Insira o cep" /><br/><br/>

				<input type="number" name="telefone" required="required" placeholder="Insira o telefone" /><br/><br/>

				<input type="email" name="email" required="required" placeholder="Insira o email" /><br/><br/>

				<input type="date" name="data" required="required" placeholder="Insira a data de nascimento"/><br/><br/>

				<button>Enviar</button>
			</form>
		</fieldset>
	</body>

</html>