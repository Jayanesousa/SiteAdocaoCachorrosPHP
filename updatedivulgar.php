<?php
include 'connection.php';

if (isset($_GET['id_cachorro'])) {
    $id = $_GET['id_cachorro'];
} else {
    die("ID do cachorro não especificado.");
}
{

    $sql = mysqli_query($connectionBD, "SELECT * FROM divulgar WHERE id_cachorro=$id");
    if ($sql) {
        $n = mysqli_fetch_array($sql);
        $nome_cachorro = $n['nome_cachorro'];
        $raca = $n['raca'];
        $sexo_cachorro = $n['sexo_cachorro'];
        $idade_cachorro = $n['idade_cachorro'];
        $peso_cachorro = $n['peso_cachorro'];
    } else {
        die("Erro ao recuperar os dados do cachorro.");
    }
} 


if (isset($_POST['editar'])) {

    $nome_cachorro = mysqli_real_escape_string($connectionBD, $_POST["nome_cachorro"]);
    $raca = mysqli_real_escape_string($connectionBD, $_POST["raca"]);
    $sexo_cachorro = mysqli_real_escape_string($connectionBD, $_POST["sexo_cachorro"]);
    $idade_cachorro = mysqli_real_escape_string($connectionBD, $_POST['idade_cachorro']);
    $peso_cachorro = mysqli_real_escape_string($connectionBD, $_POST['peso_cachorro']);
    
    if (empty($nome_cachorro) || empty($raca) || empty($sexo_cachorro) || empty($idade_cachorro) || empty($peso_cachorro)) {
        die("Todos os campos precisam ser preenchidos.");
    }

    $queryUpdate = "UPDATE divulgar SET nome_cachorro = ?, raca = ?, sexo_cachorro = ?, idade_cachorro = ?, peso_cachorro = ? WHERE id_cachorro = ?";
    $stmt = mysqli_prepare($connectionBD, $queryUpdate);
    
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ssssdi", $nome_cachorro, $raca, $sexo_cachorro, $idade_cachorro, $peso_cachorro, $id);
        if (mysqli_stmt_execute($stmt)) {
            header('Location: index.php'); 
        } else {
            die("Erro ao atualizar o cachorro.");
        }
        mysqli_stmt_close($stmt);
    } else {
        die("Erro na preparação da consulta SQL.");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Editar Dados dos Cachorros</title>
</head>

<body>
    <h2 style="text-align: center;">Editar Dados dos Cachorros</h2>
    <div class="container col-md-6 offset-md-3">
        <form method="post">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Nome Cachorro" name="nome_cachorro" value="<?php echo isset($nome_cachorro) ? $nome_cachorro : ''; ?>">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Raça" name="raca" value="<?php echo isset($raca) ? $raca : ''; ?>">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Sexo" name="sexo_cachorro" value="<?php echo isset($sexo_cachorro) ? $sexo_cachorro : ''; ?>">
                </div>
                <div class="col">
                    <input type="number" class="form-control" placeholder="Idade Cachorro" name="idade_cachorro" value="<?php echo isset($idade_cachorro) ? $idade_cachorro : ''; ?>">
                </div>
                <div class="col">
                    <input type="number" class="form-control" placeholder="Peso Cachorro" name="peso_cachorro" value="<?php echo isset($peso_cachorro) ? $peso_cachorro : ''; ?>">
                </div>
                <br>
                <div>
                    <button type="submit" name="editar" class="btn btn-success">Salvar</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
