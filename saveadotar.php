<?php
include 'connection.php';
include 'tableadotar.php';
	$nome_usuario = $_POST['nome_usuario'];
	$endereco = $_POST['endereco'];
    $idade_usuario = $_POST['idade_usuario'];
	$id_cachorro = $_POST['id_cachorro'];
	$sql = mysqli_query($connectionBD, "INSERT INTO adotar(nome_usuario, endereco, idade_usuario, id_cachorro) VALUES ('$nome_usuario', '$endereco', '$idade_usuario', '$id_cachorro')");
	
	if ($sql) {
		header('location: adotar.php');
	}
?>