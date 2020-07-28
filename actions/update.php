<?php


require_once 'conn.php';

if(isset($_POST['edit'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$cep = mysqli_escape_string($connect, $_POST['cep']);
	$logradouro = mysqli_escape_string($connect, $_POST['logradouro']);
	$complemento = mysqli_escape_string($connect, $_POST['complemento']);
	$numero = mysqli_escape_string($connect, $_POST['numero']);
	$bairro = mysqli_escape_string($connect, $_POST['bairro']);
	$uf = mysqli_escape_string($connect, $_POST['uf']);
	$data = mysqli_escape_string($connect, $_POST['data']);

	$id = mysqli_escape_string($connect, $_POST['id']);

	$sql = "UPDATE locais SET nome = '$nome', cep = '$cep', logradouro = '$logradouro', 
			complemento = '$complemento', numero = '$numero', bairro = '$bairro', uf = '$uf',
			 data = '$data' WHERE id = '$id'";

	if(mysqli_query($connect, $sql)):
		
		header('Location: ../index.php');
	else:
		
		header('Location: ../index.php');
	endif;
endif;