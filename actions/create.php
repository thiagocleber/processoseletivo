<?php



require_once 'conn.php';

function clear($input) {
	global $connect;
	
	$var = mysqli_escape_string($connect, $input);
	
	$var = htmlspecialchars($var);
	return $var;
}

if(isset($_POST['cadastrar'])):
	$nome = clear($_POST['nome']);
	$cep = clear($_POST['cep']);
	$logradouro = clear($_POST['logradouro']);
	$complemento = clear($_POST['complemento']);
	$numero = clear($_POST['numero']);
	$bairro = clear($_POST['bairro']);
	$uf = clear($_POST['uf']);
	$cidade = clear($_POST['cidade']);
	$data = clear($_POST['data']);

	$sql = "INSERT INTO locais (nome, cep, logradouro, complemento, numero, bairro, uf, cidade, data) 
                VALUES ('$nome', '$cep', '$logradouro', '$complemento', '$numero', '$bairro', '$uf', '$cidade', '$data')";

	if(mysqli_query($connect, $sql)):
		
		header('Location: ../index.php');
	else:
		
		header('Location: ../index.php');
	endif;
endif;