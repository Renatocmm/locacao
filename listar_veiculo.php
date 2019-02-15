<?php
	include("menu.php");
	include("conexao.php");

	$consulta = "SELECT * FROM veiculo";

	$resultado = mysqli_query($conexao, $consulta) or die ("Erro. não foi possivel consultar a lista de carros.");

	echo"<table border='1'>";

	echo
	"
	<tr>
		<th>placa</th>
		<th>marca</th>
		<th>modelo</th>
		<th>ano</th>
		<th>valor diaria</th>
		<th>kilometragem</th>
	</tr>
	";

	while($linha = mysqli_fetch_assoc($resultado))
	{
		echo 
		'
			<tr>
				<td>'.$linha["id_veiculo"].'</td>
				<td>'.$linha["marca"].'</td>
				<td>'.$linha["modelo"].'</td>
				<td>'.$linha["ano"].'</td>
				<td>'.$linha["valor_diaria"].'</td>
				<td>'.$linha["km"].'</td>
			</tr>
		';
	}

	echo"</table>";
?>