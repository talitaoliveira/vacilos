<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#3D415B">
	<!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->

	<title>Meus Vacilos</title>
	
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

</head>
<body>
	<header>
		<h1 class="text-center">Meus Vacilos</h1>
	</header>
	<section class="container" id="add">
		<br>
		<div class="container">
			<div class="twelve columns mensagem-retorno">
				<p id="mensagem"></p>
			</div>
			<form class="row" id="formulario">
				<div class="twelve columns">
					<input class="u-full-width" type="text" placeholder="Descreva seu vacilo" id="descricao_vacilo" name="descricao_vacilo">
				</div>
				<div class="twelve columns">
					<input class="u-full-width" type="date" id="data_vacilo" name="data_vacilo">
				</div>
				<div class="form-group">
					<input class="button-primary" type="submit" id="adcionar" value="Manda teu vacilo">
				</div>
			</form>
			<input class="button-primary" type="button" id="recuperar-vacilos" value="Recuperar teus Vacilos">
		</div>
	</section>
	<hr>
	<section id="itens" class="container">
		<h2 class="text-center">Lista mostrando o quão tu é vacilão</h2>
		<ul id="lista">
		</ul>
	</section>
</body>
</html>