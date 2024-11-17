<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Divulgar</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" >
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container col-md-6 offset-md-3">
		<h1>Preencha os requisitos a seguir:</h1>
		<form method="post" action="savedivulgar.php">
			<div class="col">
				<div class="col">
					<input type="text" class="form-control" placeholder="Nome Cachorro" name="nome_cachorro">
				</div>
				<div class="col">
					<input type="text" class="form-control" placeholder="Raça" name="raca">
				</div>
                <div class="col">
					<input type="text" class="form-control" placeholder="Sexo" name="sexo_cachorro">
				</div>
                <div class="col">
					<input type="double" class="form-control" placeholder="Idade Cachorro" name="idade_cachorro">
				</div>
                <div class="col">
					<input type="double" class="form-control" placeholder="Peso Cachorro" name="peso_cachorro">
				</div>
			</div>
			<br>
			<div>
				<button type="submit" class="btn btn-primary">Salvar</button>
			</div>
		</form>
		<a href="tabledivulgar.php" class="btn btn-sm btn-warning">Cachorros para adoção</a>
	</div>
</body>
</html>