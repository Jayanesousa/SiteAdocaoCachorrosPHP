<?php
include 'connection.php';

if (isset($_GET['id_cachorro'])) {
    $id = intval($_GET['id_cachorro']);

    mysqli_begin_transaction($connectionBD);

    try {
        $deleteAdotar = "DELETE FROM adotar WHERE id_cachorro = ?";
        $stmtAdotar = mysqli_prepare($connectionBD, $deleteAdotar);
        mysqli_stmt_bind_param($stmtAdotar, "i", $id);
        mysqli_stmt_execute($stmtAdotar);

        $deleteDivulgar = "DELETE FROM divulgar WHERE id_cachorro = ?";
        $stmtDivulgar = mysqli_prepare($connectionBD, $deleteDivulgar);
        mysqli_stmt_bind_param($stmtDivulgar, "i", $id);
        mysqli_stmt_execute($stmtDivulgar);

        mysqli_commit($connectionBD);

        header('Location: tabledivulgar.php');
        exit();
    } catch (Exception $e) {
        mysqli_roll_back($connectionBD);
        echo "Erro ao excluir o cachorro: " . $e->getMessage();
    }
} else {
    echo "ID do cachorro não especificado.";
}
?>
