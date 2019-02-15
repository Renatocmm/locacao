<?php
	include("menu.php");
	include("conexao.php");

	$consulta = "SELECT * FROM cliente";

	$resultado = mysqli_query($conexao, $consulta) or die ("Erro. não foi possivel consultar a lista de clientes.");

	echo"<table border='1'>";

	echo
	"
	<tr>
		<th>cpf</th>
		<th>nome</th>
		<th>endereço</th>
		<th>bairro</th>
		<th>cidade</th>
		<th>estado</th>
		<th>cep</th>
		<th>telefone</th>
		<th>email</th>
		<th>data de nascimento</th>
		
	</tr>
	";

	while($linha = mysqli_fetch_assoc($resultado))
	{
		echo 
		'
			<tr>
				<td>'.$linha["id_cliente"].'</td>
				<td>'.$linha["nome"].'</td>
				<td>'.$linha["endereco"].'</td>
				<td>'.$linha["bairro"].'</td>
				<td>'.$linha["cidade"].'</td>
				<td>'.$linha["estado"].'</td>
				<td>'.$linha["cep"].'</td>
				<td>'.$linha["telefone"].'</td>
				<td>'.$linha["email"].'</td>		
				<td>'.$linha["data_nascimento"].'</td>		
			</tr>
		';
	}

	echo"</table>";
?>