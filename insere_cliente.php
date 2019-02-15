<?php
	include("menu.php");
	include("conexao.php");

	$id_cliente = $_POST["cpf"];
	$nome = $_POST["nome"];
	$endereco = $_POST["endereco"];
	$bairro = $_POST["bairro"];
	$cidade = $_POST["cidade"];
	$estado = $_POST["estado"];
	$cep = $_POST["cep"];
	$telefone = $_POST["telefone"];
	$email = $_POST["email"];
	$data = $_POST["data"];
	

	$insercao =
	 "INSERT INTO cliente (id_cliente, nome, endereco, bairro, cidade, estado, cep, telefone, email, data_nascimento)
		VALUES 
		('$id_cliente','$nome','$endereco','$bairro','$cidade','$estado', '$cep', '$telefone', '$email', $data)
	";

	 mysqli_query($conexao, $insercao) or die("Erro. não foi possivel iserir o cliente no sistema");

	echo"Cliente cadastrado com sucesso.";
?>