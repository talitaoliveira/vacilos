$( document ).ready(function() {

	$("#formulario").submit(function(e){
		e.preventDefault();
		var dados_form = $("form").serialize();
		console.log(dados_form);
		console.log("oola");


		$.ajax({
			method: "POST",
			url: "classes/tratamento.php",
			data: dados_form,
			dataType: 'json',
		}).done(function(retorno) {
			if(retorno.status == true){
				$("#mensagem").html(retorno.mensagem);
				$("#lista").prepend('<li>'+$("#descricao_vacilo").val()+'</li>');
			}else{
				$("#mensagem").html("nao foi");
			}
		},'json');


	});

	$("#lista").click(function(e){
		e.preventDefault();
		e.target.classList.toggle('marcado');
	});
		

	$("#recuperar-vacilos").click(function(e){
		e.preventDefault();
		e.target.classList.toggle('marcado');
	});

});