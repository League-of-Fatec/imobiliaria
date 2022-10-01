<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./styles/style.css">
    <title>Imobiliária</title>
</head>
<body>
	<nav>
		<h1>Imobiliária</h1>
		<button id="cadastrar">Cadastrar <img src="./img/mais.svg" alt="Ícone de Mais"></button>
		<section class="menu" id="menu">
			<img src="./img/x.svg" alt="Ícone em formato de X" id="fechar">
			<h2 id="menu_titulo">Cadastrar Imóveis</h2>
			<form action="form.php" method="POST">
				<label for="Tipo">Tipo de Imóvel</label> <br>
				<input type="radio" name="Tipo" id="casa" value="Casa">Casa 
				<input type="radio" name="Tipo" id="apartamento" value="Apartamento">Apartamento <br>
				<label for="Quartos">Quartos</label> <br>
				<input type="number" name="Quartos" id="quartos"> <br>
				<label for="Preço">Preço</label> <br>
				<input type="number" name="Preço" id="preco"> <br>
				<label for="Quintal">Quintal?</label> <br>
				<input type="radio" name="Quintal" id="quintal" value="s"> Sim
				<input type="radio" name="Quintal" id="quintal" value="" Não <br>
				<label for="Descrição">Descrição</label> <br>
				<textarea name="Descrição" id="decricao" cols="30" rows="10" maxlength="100"></textarea> <br>
				<button type="submit" id="submit">Cadastrar</button>
			</form>
		</section>
	</nav>
	<main class="lista">

	</main>

	<script src="./scripts/menu.js"></script>
</body>
</html>