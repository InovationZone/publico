
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
	$("#btnentrada").click(function(event){
		
		//cancelo o evento padrão do botao(submit)
		event.preventDefault();
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
				$("#resposta").html(data);
			}
		})
		
	});
	
	
		//mascara para os campos de entrada
		$(document).ready(function(){
			$('#txtplaca').mask('xxx-0000', {
				translation: {
					'x': {
						pattern: /[a-zA-Z]/
					}
					
				}
			});
			
			$('#txtdata').mask('00/00/0000');
			
			
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
			
			/*populando os campos
			$(function(){
				$('#id_tipo').change(function(){
					
					if( $(this).val() ) {
						var param = $(this).val()
						var url = 'consulta_marca.php';
						$.ajax({
							url: url,
							method: 'post',
							data:{'id_tipo':param},
							dataType:"Json",
							success: function(data){
								alert(data);
							
							}
						})
					
					} 
				});
			});*/
			
	//pesquisa caixa de marcas
	$("#txtmarca").keyup(function(){
		var id_tipo = $('#id_tipo :selected').val();
		
		if (id_tipo == "") {
			$("#resposta").show();
			$("#resposta").html("<div class='alert alert-warning' id='resposta' role='alert'>Preencha o tipo de Veículo<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");
	
		} 
			
			if( $(this).val() && id_tipo != "" ) {
				$("#resposta").hide();
				$("#caixa").show();
				var url = 'consulta_marca.php';
				$.ajax({
					url: url,
					method: 'post',
					data:{'txtmarca': $(this).val() , 'id_tipo': id_tipo},
					success: function(data) {
					
						$("#marcas_encontradas").html(data);
						//executa a funcao para que ela funcione
						
			
					},
						
					beforeSend: function(){
						$("#loader").css({display:"block"});
					},
					
					complete: function(){
						$("#loader").css({display:"none"});
						PegaValor();
					}
					
				});
				
			}
		
			
	});
	
	function PegaValor(){
		$("#mar_nome").click(function(event){
			event.preventDefault();
			var opcao = $("#mar_nome").html();
			
			
			
			$("#txtmarca").val(opcao);
			$("#caixa").hide();
			
			
			
		});
	}
					
});

	
	
		


$(document).ready(function(){
	
	
	
			//incia a pagina com o icone escondido
			$("#icone").hide();
			
			//incia a pagina a caixa de marcas escondida
			$("#caixa").hide();
			
			
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





			
