<?php
	include_once("connectCliente.php");
	
	$nome = mysqli_real_escape_string($link, $_POST['nome']);
	$sobrenome = mysqli_real_escape_string($link, $_POST['sobrenome']);
	$email = mysqli_real_escape_string($link, $_POST['email']);
	$senha = mysqli_real_escape_string($link, $_POST['senha']);
	$numero = mysqli_real_escape_string($link, $_POST['numero']);	
	$telefone = mysqli_real_escape_string($link, $_POST['telefone']);
	$cep = mysqli_real_escape_string($link, $_POST['cep']);
	$endereco = mysqli_real_escape_string($link, $_POST['endereco']);
	$bairro = mysqli_real_escape_string($link, $_POST['bairro']);
	$cidade = mysqli_real_escape_string($link, $_POST['cidade']);	
	
	

	
	$sql = "INSERT INTO tb_clientes (nome, sobrenome, email, senha, numero, telefone, cep, endereco, bairro, cidade) 
    VALUES ('$nome','$sobrenome','$email','$senha','$numero','$telefone',
		'$cep','$endereco','$bairro','$cidade')";

		mysqli_query($link, $sql);
		

?>