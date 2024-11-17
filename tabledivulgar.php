<?php
include 'listdivulgar.php';
include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tabela Divulgar</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<br><br><br>
	<div class="container col-md-6 offset-md-3">
		<table  class="table  table-hover">
			<thead>
				<tr>
                    <th scope="col">Id</th>
					<th scope="col">Nome Cachorro</th>
					<th scope="col">Raça</th>
					<th scope="col">Sexo</th>
                    <th scope="col">Idade Cachorro</th>
                    <th scope="col">Peso</th>
					<th scope="col">Funções</th>
				</tr>
			</thead>
			<?php while ($divulgar = mysqli_fetch_assoc($listarSQL)) { ?>
			<tbody>
				<tr>
                    <td><?php echo $divulgar['id_cachorro']; ?></td>
					<td><?php echo $divulgar['nome_cachorro']; ?></td>
					<td><?php echo $divulgar['raca']; ?></td>
					<td><?php echo $divulgar['sexo_cachorro']; ?></td>
                    <td><?php echo $divulgar['idade_cachorro']; ?></td>
                    <td><?php echo $divulgar['peso_cachorro']; ?></td>
					<td>
					<td>
						<a href="deletedivulgar.php?id_cachorro=<?php echo $divulgar['id_cachorro']; ?>" class="btn btn-sm btn-danger " >Excluir</a>
						<a href="updatedivulgar.php?id_cahorro=<?php echo $divulgar['id_cachorro']; ?>" class="btn btn-sm btn-warning " >Editar</a>
					</td>
					</td>
				</tr>
			</tbody>
			<?php } ?>
		</table>
		<a href="index.php" class="btn btn-sm btn-warning">Página Inicial</a>
	</div>
</body>
</html>