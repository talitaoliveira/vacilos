$( document ).ready(function() {

	var url = window.location.href;

	$("#conteudo").load("paginas/login/login.php");

	if(window.location.href == BASE + '/vacilos'){
		$("#conteudo").load(BASE + "/vacilos/paginas/login/login.php");
	}else if(window.location.href == BASE + '/vacilos/?cadastrar'){
		$("#conteudo").load(BASE + "/vacilos/paginas/cadastrar/cadastrar.php");
	}else if(window.location.href == BASE + '/vacilos/?listagem'){
		$("#conteudo").load("principal.php");
	}

});