$( document ).ready(function() {

	$("#link-login").click(function(e){
		e.preventDefault();
		window.history.pushState("object or string", "Cadastro", "/vacilos");
		$("#conteudo").load(BASE + "/vacilos/paginas/login/login.php");
	});

	$("#formulario-cadastro").submit(function(e){
		console.log("ola");
		e.preventDefault();
		var dados_form = $("form").serialize();

		$.ajax({
			method: "POST",
			url: BASE + "/vacilos/classes/cadastro/tratamento.php",
			data: dados_form,
			dataType: 'json',
		}).done(function(retorno) {
			if(retorno.status == true){
				$(".mensagem-retorno").css('display','block');
				$("#mensagem").addClass('sucesso');
				$("#mensagem").html(retorno.mensagem + " >> redirecionando para tela de login");	
				setTimeout(function(){
					$(".mensagem-retorno").css('display','none');
					$("#conteudo").load(BASE + "/vacilos/paginas/login/login.php");
				},5000);
				
			}else{
				$(".mensagem-retorno").css('display','block');
				$("#mensagem").addClass('falha');
				$("#mensagem").html(retorno.mensagem);
			}
		},'json');
	});
});