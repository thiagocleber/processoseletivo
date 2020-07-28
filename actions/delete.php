<?php



require_once 'conn.php';

if(isset($_POST['delet'])):
	
	$id = mysqli_escape_string($connect, $_POST['id']);

	$sql = "DELETE FROM locais WHERE id = '$id'";

	if(mysqli_query($connect, $sql)):
		
		header('Location: ../index.php');
	else:
		
		header('Location: ../index.php');
	endif;
endif;