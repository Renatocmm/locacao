<?php
	// ALTERADO VIA GIT HUB
	include("menu.php");
	include("conexao.php");

	$cod_cliente = $_POST["cod_cliente"];
	$cod_veiculo = $_POST["cod_veiculo"];
	$data_i = $_POST["data_inicio"];
	$data_f = $_POST["data_fim"];
	
	$consulta = "SELECT valor_diaria FROM veiculo WHERE id_veiculo = '$cod_veiculo'";
	$resultado = mysqli_query($conexao,$consulta) or die("ERRO");

	$linha =  mysqli_fetch_assoc($resultado);
	$valor_diaria = $linha["valor_diaria"];

	$insercao =
	 "INSERT INTO movimento
		VALUES 
		('','$cod_cliente','$cod_veiculo','$data_i', '$data_f','$valor_diaria')
	";

	mysqli_query($conexao, $insercao) or die("Erro. não foi possivel iserir o movimento no sistema");

	echo"movimento cadastrado com sucesso.";
?>