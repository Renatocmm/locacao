<?php
	include("menu.php");
	include("conexao.php");

	$consulta_cliente = "SELECT * FROM cliente";
	$resultado_cliente = mysqli_query($conexao, $consulta_cliente) or die("Erro");

	$consulta_veiculo = "SELECT * FROM veiculo";
	$resultado_veiculo = mysqli_query($conexao, $consulta_veiculo) or die("Erro");
?>

<!DOCTYPE html>

<html>

	<head>
		<title></title>
		<meta charset="utf-8"/>
	</head>


	<body>

		<fieldset>
			<legen    d><h2>Inserir um movimento</h2></legend>
			<form action="insere_movimento.php" method="post">
				
				<select name="cod_cliente">
			
					<option>Selecione um cliente</option>
					<?php

						while($linha=mysqli_fetch_assoc($resultado_cliente))
						{
							$cod_cliente = $linha["id_cliente"];
							$nome = $linha["nome"];
							echo"<option value='$cod_cliente'>$nome</option>";
						}
					?>

				</select><br/><br/>

				<select name="cod_veiculo">
			
					<option>Selecione um veiculo</option>
					<?php

						while($linha=mysqli_fetch_assoc($resultado_veiculo))
						{
							$cod_veiculo = $linha["id_veiculo"];
							$marca = $linha["marca"];
							$modelo = $linha["modelo"];
							$ano = $linha["ano"];
							$valor = $linha["valor_diaria"];
							echo"<option value='$cod_veiculo'>$marca / $modelo ($ano) - R$$valor</option>";
						}
					?>

				</select><br/><br/>

				<input type="date" name="data_inicio" required="required" placeholder="Insira a data de inicio" /><br/><br/>

				<input type="date" name="data_fim" required="required" placeholder="Insira a data final" /><br/><br/>

				<input type="number" name="valor_diaria" required="required" placeholder="Insira o valor da diaria" /><br/><br/>

				<button>Enviar</button>
			</form>
		</fieldset>
	</body>

</html>