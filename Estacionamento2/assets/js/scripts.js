
//ajax - acessando páginas
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


$(document).ready(function(){
	//entrada no estacionamento
	$("#btnentrada").click(function(){
		$.ajax({
			url: 'insere_entrada.php',
			method: 'post',
			data: $("#frmEntrada").serialize(),
			success: function(data){
				alert(data);
			}
		});
		
	});
	
	
			//incia a pagina com o icone escondido
			$("#icone").hide();
			
			
			$("#icone").click(function() {
				$("#icone").hide();
				$("#barra_lateral").show();
				
			});
			
			$("#esconder").click(function(){
				$("#barra_lateral").hide();
				$("#icone").show();
			});
			
			//-------------------------------------//
			
			
			/*mostra / escode itens menu
		
			$("#veiculos").hide();
			$("#clientes").hide();
			$("#entrada").hide();
			$("#saida").hide();
			
			$("#submenucad").click(function(){
				$("#veiculos").toggle();
				$("#clientes").toggle();
	
			});
			
			
			$("#submenufluxo").click(function(){
				$("#entrada").toggle();
				$("#saida").toggle();
	
			});
			
			//-------------------------------------//*/
			
			
		
	
	
});





			
