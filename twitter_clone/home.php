<?php
	//iniciando a sessao

	session_start();

	if(!isset($_SESSION['usuario'])){
		header('Location: index.php?erro=1');
	}

?>

<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Twitter clone</title>
		
		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

		<script type="text/javascript">

			$(document).ready( function(){

				//associar o evento de click ao botao
				//#btn_tweet é pego quando o botao é clicado.
				$('#btn_tweet').click( function(){
				

					//verifico se o campo não está vazio
					if($('#texto_tweet').val().length > 0){
						//realizando uma requisicao assinc. com o ajax
						$.ajax({
							url: 'inclui_tweet.php',
							method: 'post',
							//serializo um formulário pelo ID em JSON
							data: $('#form_tweet').serialize(),
							success: function(data) {
								alert('Tweet incluido com sucesso');
								$('#texto_tweet').val('');
								atualizaTweet();
							}

						});
					}

				});

				function atualizaTweet(){
					//carregar tweets

					$.ajax({
						url: 'get_tweet.php',
						success: function(data) {
							$('#tweets').html(data);
							
						}

					});
				}
					//executa a funcao para que ela funcione
					atualizaTweet();

			});

		</script>
	
	</head>

	<body>

		<!-- Static navbar -->
	    <nav class="navbar navbar-default navbar-static-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <img src="imagens/icone_twitter.png" />
	        </div>
	        
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="sair.php">Sair</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>


	    <div class="container">
	    	<div class="col-md-3">
	    		<!--classe painel-->
	    		<div class="panel panel-default">
	    			<div class="panel-body">
	    				<h4><?= $_SESSION['usuario'] ?></h4>

	    				<hr />
	    				<div class="col-md-6">
	    					TWEETS <br /> 1
	    				</div>
	    				<div class="col-md-6">
	    					SEGUIDORES <br /> 1		
	    				</div>
	    			
	    			</div>		
	    		</div>
	    	</div>


	    	<div class="col-md-6">
	    		<div class="panel panel-default">
	    			<div class="panel-body">
		    			<form id="form_tweet" class="input-group">
		    				<input type="text" id="texto_tweet" name="texto_tweet" class="form-control" placeholder="O que está acontecendo agora?" maxlength="140" />
		    				<span class="input-group-btn">
		    					<button class="btn btn-default"  id="btn_tweet" type="button">Tweet</button>
		    				</span>
		    			</form>
		    		</div>
	    		</div>

	    		<div id="tweets" class="list-group"></div>	
			</div>
				

			<div class="col-md-3">
				<div class="panel panel-default">
					<div class = "panel-body">
						<h4><a href="#">Procurar por pessoas</a></h4>

					</div>
				</div>
				

			</div>

			

		</div>


	    </div>
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>