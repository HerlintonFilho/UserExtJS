<?php
	include("../conectar.php");

	$info = $_POST['contatos'];

	$data = json_decode(stripslashes($info));

	$id = $data->id;

	$query = sprintf("DELETE FROM Contato WHERE id=%d",
		mysqli_real_escape_string($conexao,$id));

	$rs = mysqli_query($conexao,$query);
	 
	echo json_encode(array(
		"success" => mysqli_errno($conexao) == 0
	));
?>