$( document ).ready(function() {

	$("#link-cadastrar").click(function(e){
		e.preventDefault();
		console.log(BASE);
		window.history.pushState("object or string", "Cadastro", "/vacilos/?cadastrar");
		$("#conteudo").load(BASE + "/vacilos/paginas/cadastrar/cadastrar.php");
	});

	$("#formulario-login").submit(function(e){
		console.log(BASE + "/vacilos/classes/login/tratamento.php");
		e.preventDefault();
		var dados_form = $("form").serialize();

		$.ajax({
			method: "POST",
			url: BASE + "/vacilos/classes/login/tratamento.php",
			data: dados_form,
			dataType: 'json',
		}).done(function(retorno) {
			if(retorno.status == true){
				$(".mensagem-retorno").css('display','block');
				$("#mensagem").addClass('sucesso');
				$("#mensagem").html(retorno.mensagem + " >> redirecionando para tela inicial");	
				setTimeout(function(){
					$(".mensagem-retorno").css('display','none');
					$("#mensagem").addClass('falha');
					$("#conteudo").load(BASE + "/vacilos/paginas/principal/principal.php");
				},5000);
				
			}else{
				$(".mensagem-retorno").css('display','block');
				$("#mensagem").addClass('falha');
				$("#mensagem").html(retorno.mensagem);
			}
		},'json');
	});

});