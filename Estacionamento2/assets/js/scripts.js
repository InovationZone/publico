
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
	
	
	//entrada no estacionamento
	$("#btnentrada").click(function(){
		var txtplaca = $("#txtplaca").val();
	    var cmbtipo = $('#cmbtipo').val();
		var txtmarca = $("#txtmarca").val();
		var txtmodelo = $("#txtmodelo").val();
		var txtcor = $("#txtcor").val();
		var cmbcobranca = $("#cmbcobranca").val();
		var txtobs = $("#txtobs").val();
		
		$.ajax({
			url: 'insere_entrada.php',
			method: 'post',
			data: {'txtplaca': txtplaca , 'cmbtipo': cmbtipo , 'txtmarca': txtmarca , 'txtmodelo' : txtmodelo , 'txtcor' : txtcor , 
				'cmbcobranca' : cmbcobranca , 'txtobs' : txtobs},
			success: function(data){
				alert(data);
			}
		})
		
	});
	
	//preencher o tipo de cliente apos a placa ser digitada - Tela de entrada
	$("#txtplaca").blur(function() {
				var url = 'consulta_tip_cli.php';
				var txtplaca = $("#txtplaca").val();
				
				
				$.ajax ({
					url: url,
					data: {'txtplaca': txtplaca},
					method: 'POST',
					success: function(data) {
					
						var msg = data;
						$("#tipo").val(msg);
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





			
