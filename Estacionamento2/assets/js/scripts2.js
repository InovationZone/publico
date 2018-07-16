
//ajax - acessando páginas
$(document).ready(function(){
	$('.url').click(function(){
		
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
	$('#clica').click(function(){
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

			