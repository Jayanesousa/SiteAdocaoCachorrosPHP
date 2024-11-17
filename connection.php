<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$nomedobanco = "siteadocaophp";

$connectionBD = mysqli_connect($servidor, $usuario, $senha, $nomedobanco);
if (!$connectionBD) {
    echo "Não conectou com o Banco";
}else {
    //echo "Conectado!!";
}
?>