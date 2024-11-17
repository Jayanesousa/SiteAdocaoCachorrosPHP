<?php
include 'tabledivulgar.php';
    $nome_cachorro = $_POST['nome_cachorro'];
	$raca = $_POST['raca'];
	$sexo_cachorro = $_POST['sexo_cachorro'];
    $idade_cachorro = $_POST['idade_cachorro'];
    $peso_cachorro = $_POST['peso_cachorro'];
	$sql = mysqli_query($connectionBD, "INSERT INTO divulgar(nome_cachorro, raca, sexo_cachorro, idade_cachorro, peso_cachorro) VALUES ('$nome_cachorro', '$raca', '$sexo_cachorro', '$idade_cachorro', '$peso_cachorro')");
	
	if ($sql) {
		header('location: divulgar.php');
	}
?>