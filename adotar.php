<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Adotar</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" >
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container col-md-6 offset-md-3">
		<h1>Preencha o formulário a seguir:</h1>
		<form method="post" action="saveadotar.php">
			<div class="col">
				<div class="col">
					<input type="text" class="form-control" placeholder="Nome" name="nome_usuario">
				</div>
                <div class="col">
					<input type="varchar" class="form-control" placeholder="Endereço" name="endereco">
				</div>
				<div class="col">
					<input type="int" class="form-control" placeholder="Idade" name="idade_usuario">
				</div>
				<div class="col">
					<input type="int" class="form-control" placeholder="Id Cachorro" name="id_cachorro">
				</div>
			</div>
			<br>
			<div>
			<button type="submit" class="btn btn-primary">Adotar</button>
			</div>
		</form>
	<a href="index.php" class="btn btn-sm btn-warning ">Página Inicial</a>
	</div>
</body>
</html>
