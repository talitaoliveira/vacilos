<?php
	define('BASE_URL', "http://" . $_SERVER['HTTP_HOST'] . $phpself);
?>
<br>
<div class="row">
	<div class="twelve columns">
		<a href="" id="link-login">Login</a> >> <strong>Cadastro</strong>
	</div>
</div>
<br>
<form class="row" id="formulario-cadastro">
	<div class="twelve columns">
		<label for="login">Login</label>
		<input class="u-full-width" type="text" placeholder="Login" id="login" name="login">
	</div>
	<div class="twelve columns">
		<label for="email">E-mail</label>
		<input class="u-full-width" type="email" placeholder="Senha" id="email" name="email">
	</div>
	<div class="twelve columns">
		<label for="senha">Senha</label>
		<input class="u-full-width" type="password" placeholder="Senha" id="senha" name="senha">
	</div>
	<div class="twelve columns">
		<label for="confirma-senha">Confirme a senha</label>
		<input class="u-full-width" type="password" placeholder="Confirme a senha" id="confirma-senha" name="confirma-senha">
	</div>
	<div class="twelve columns">
		<div class="row">
			<div class="six columns">
				<input class="button-primary" type="submit" id="fazer-login" value="Cadastrar">
			</div>
		</div>
	</div>
</form>
<script defer src="<?php echo BASE_URL;?>/vacilos/paginas/cadastrar/cadastrar.js"></script>