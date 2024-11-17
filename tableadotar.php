<?php
include 'listadotar.php';
include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tabela Adotar</title>
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
					<th scope="col">Nome</th>
					<th scope="col">Endereço</th>
					<th scope="col">Idade</th>
					<th scope="col">Id Cachorro</th>
				</tr>
			</thead>
			<?php while ($adotar = mysqli_fetch_assoc($listarSQL)) { ?>
			<tbody>
				<tr>
					<td><?php echo $adotar['id_usuario']; ?></td>
					<td><?php echo $adotar['nome_usuario']; ?></td>
					<td><?php echo $adotar['endereco']; ?></td>                   
					<td><?php echo $adotar['idade_usuario']; ?></td>
					<td><?php echo $adotar['id_cachorro']; ?></td>
				</tr>
			</tbody>
			<?php } ?>
		</table>
		<a href="index.php" class="btn btn-sm btn-warning " >Página Inicial</a>
	</div>
</body>
</html>