<?php
	define('BASE_URL', "http://" . $_SERVER['HTTP_HOST'] . $phpself);
?>
<br>
<form class="row" id="formulario-login">
	<div class="twelve columns">
		<label for="login">Login</label>
		<input class="u-full-width" type="text" placeholder="Login" id="login" name="login">
	</div>
	<div class="twelve columns">
		<label for="senha">Senha</label>
		<input class="u-full-width" type="password" placeholder="E-mail" id="senha" name="senha">
	</div>
	<div class="twelve columns">
		<div class="row">
			<div class="six columns">
				<input class="button-primary" type="submit" id="fazer-login" value="Entrar">
			</div>
			<div class="six columns">
				<small>ou</small>
				<a href="" id="link-cadastrar">Cadastre-se</a>
			</div>
		</div>
	</div>
</form>
<script defer src="<?php echo BASE_URL;?>/vacilos/paginas/login/login.js"></script>