<?php
	define('BASE_URL', "http://" . $_SERVER['HTTP_HOST'] . $phpself);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#3D415B">
	<!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->

	<title>Meus Vacilos</title>

	<script type="text/javascript">
		var BASE = "<?php echo BASE_URL; ?>";
	</script>
	
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

</head>
<body>
	<header>
		<h1 class="text-center">Meus Vacilos</h1>
	</header>
	<div class="mensagem-retorno container">
		<p id="mensagem"></p>
	</div>
	<section class="container" id="conteudo">
		
	</section>
</body>
</html>