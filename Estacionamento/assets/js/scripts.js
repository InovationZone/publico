
//Troca somente o conteudo da Div das páginas, mantendo o menu único
$(document).ready(function(){
	$("ul#menu a").click(function( e ){
		e.preventDefault();
		var href = $( this ).attr('href');
		$("#content").load( href +" #content");
	});
	
});

//refresh na inicio para carregar os graficos
$(document).ready(function(){
	$("#inicio").click(function(){
		window.location.reload();
	});
	

});



			
