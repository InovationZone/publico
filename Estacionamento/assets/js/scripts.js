
//Troca somente o conteudo da Div das páginas, mantendo o menu único
$(document).ready(function(){
	$('.url_carregamento').click(function(){
		var url = this.id + '.php';
	
		$.ajax({
			url: url,
			success: function(data){
				$("#content").html(data);
					
			},
			
			beforeSend: function(){
				$("#loader").css({display:"block"});
				
			},
			
			complete: function(){
				$("#loader").css({display:"none"});
				
			}
			
			
		});
		
		
		
	});

});

//refresh na inicio para carregar os graficos
$(document).ready(function(){
	$("#inicio").click(function(){
		window.location.reload();
	});
	
	//entrada no estacionamento
	$("#btnentrada").click(function(){
		$.ajax({
			url: 'insere_entrada.php',
			method:'post',
			data: $('#frmEntrada').serialize(),
			success: function(data){
				alert("entrada feita com sucesso!");
				
			}
			
			
			
		});
		
	});
	

});



			
