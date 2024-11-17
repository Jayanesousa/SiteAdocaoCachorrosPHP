<?php
include 'connection.php';
if (isset($_GET['id_cachorro'])) {
    $id = $_GET['id_cachorro'];
    $sql = mysqli_query($connectionBD, "SELECT * FROM divulgar WHERE id_cachorro=$id");
    $count = (is_array($sql)) ? count($sql) : 1;
    if ($count) {
        $n = mysqli_fetch_array($sql);
        $nome_cachorro = $n['nome_cachorro'];
        $raca = $n['raca'];
        $sexo_cachorro = $n['sexo_cachorro'];
        $idade_cachorro = $n['idade_cachorro'];
        $peso_cachorro = $n['peso_cachorro'];
    }
}

if (isset($_POST['editar'])) {
    $id = $_GET["id_cachorro"];
    $nome_cachorro = $_POST["nome_cachorro"];
    $raca = $_POST["raca"];
    $sexo_cachorro = $_POST["sexo_cachorro"];
    $idade_cachorro = $_POST['idade_cachorro'];
    $peso_cachorro = $_POST['peso_cachorro'];
    $queryUpdate = "UPDATE divulgar SET nome_cachorro = '$nome_cachorro', raca = '$raca', sexo_cachorro = '$sexo_cachorro', idade_cachorro = '$idade_cachorro', peso_cachorro = '$peso_cachorro' WHERE id_cachorro = $id";

    $consulta = mysqli_query($connectionBD, $queryUpdate);
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Editar produtos</title>
</head>

<body>
<h2 style="text-align: center;">Editar produtos</h2>
    <div class="container" col-md-6 offset-md-3>
        <form method="post">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Nome Cachorro" name="nome_cachorro" id="" value="<?php echo isset($nome_cachorro) ?>">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Raça" name="raca" id="" value="<?php echo isset($raca) ?>">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Sexo" name="sexo_cachorro" id="" value="<?php echo isset($sexo_cachorro) ?>">
                </div>
                <div class="col">
                    <input type="number" class="form-control" placeholder="Idade Cachorro" name="idade_cachorro" id="" value="<?php echo isset($idade_cachorro) ?>">
                </div>
                <div class="col">
                    <input type="number" class="form-control" placeholder="Peso Cachorro" name="peso_cachorro" id="" value="<?php echo isset($peso_cachorro) ?>">
                </div>
                <br>
                <div>
                    <a href="tabledivulgar.php" name="editar" class="btn btn-success">Salvar</a>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>