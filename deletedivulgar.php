<?php
include 'connection.php';
// Excluir produtos
$id = $_GET["id_cachorro"];
if (isset($_GET['id_cachorro'])) {
     $sql = mysqli_query($connectionBD, "DELETE FROM divulgar WHERE id_cachorro = {$id}")
          or die(mysqli_error($connectionBD));
     header('location: tabledivulgar.php');
}
?>
