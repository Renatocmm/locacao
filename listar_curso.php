<?php
	include("menu.php");
	include("conexao.php");

	$consulta = "SELECT * FROM curso";

	$resultado = mysqli_query($conexao, $consulta) or die ("Erro. não foi possivel consultar a lista de cursos.");

	echo"<table border='1'>";

	echo
	"
	<tr>
		<th>cod</th>
		<th>nome</th>
		<th>carga horaria</th>
		<th>nivel</th>
	</tr>
	";

	while($linha = mysqli_fetch_assoc($resultado))
	{
		echo 
		'
			<tr>
				<td>'.$linha["id_curso"].'</td>
				<td>'.$linha["nome"].'</td>
				<td>'.$linha["carga_horaria"].'</td>
				<td>'.$linha["nivel"].'</td>
			</tr>
		';
	}

	echo"</table>";
?>