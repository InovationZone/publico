<?php
	//Coloco em arrays exemplos de código de Filmes
	$IdFilmes = array();
	$IdFilmes[0] = "tt0108037";
	$IdFilmes[1] = "tt0974015";
	$IdFilmes[2] = "tt4765284";
	$IdFilmes[3] = "tt4779682";
	$IdFilmes[4] = "tt4881806";
	$IdFilmes[5] = "tt4925292";

	
	$Filmes = array();
	 //percorro eles
	 for ($i=0; $i < count($IdFilmes) ; $i++) {  
		$url = "http://www.omdbapi.com/?i=".$IdFilmes[$i] ."&apikey=6dd48ad4";
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch , CURLOPT_SSL_VERIFYPEER , false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch);
		//deserializo
		$recebe = json_decode($result);
		//atribuo as posicoes do array
		$Filmes[$i]['IdFilmes'] = $IdFilmes[$i];
		$Filmes[$i]['Title'] = $recebe->Title;
		$Filmes[$i]['Year'] = $recebe->Year;
		$Filmes[$i]['Poster'] = $recebe->Poster;
		$Filmes[$i]['Runtime'] = $recebe->Runtime;
		$Filmes[$i]['Genre'] = $recebe->Genre;
		$Filmes[$i]['Director'] = $recebe->Director;
		$Filmes[$i]['Actors'] = $recebe->Actors;
		$Filmes[$i]['imdbRating'] = $recebe->imdbRating;
		


   
		
		
	}
		
?>


<!--Densenvolvido por João Paulo -->
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Coleção de Filmes</title>
    <link rel="icon" href="imagens/favicon.png"

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">
   
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-fixed-top navbar-inverse navbar-transparente">
		<div class="container">
          
          <!--header -->
          <div class="navbar-header">
            <!--botao toggle -->
            <!--botao criado para quando a pagina for diminuiada, aparecer um botao lateral a direita que quando acionado mostra o menu-->
            <button type="button" class="navbar-toggle collapsed" data-toggle = "collapse" data-target="#barra-navegacao">
              <!--Alterar navegação para leitores de tela-->
              <span class="sr-only">Alterar navegação</span>
              <!-- ##-->
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>


            <a href="index.php" class ="navbar-brand">
              <span class="img-logo">Coleção de Filmes</span>
            </a>
          </div>

          <!--navbar -->
          <div class="colapse navbar-collapse" id="barra-navegacao">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="">Premium</a></li>
              <li><a href="">Free</a></li>
              <li class="divisor" role="separator"></li>
              <li><a href="">Inscrever-se</a></li>
              <li><a href="">Entrar</a></li>
            </ul>
          </div>

      </div><!--Container -->
    </nav><!--nav --> 

    <div class="capa">
      <div class="texto-capa">
        <h1>Coleção de Filmes</h1>
      </div>
    </div>

    <!--conteudos -->
    <section id="servicos">
		<div class="container">
			<div class="row">
				<?php for ($i=0; $i < count($Filmes) ; $i++){ ?>		
					<div class="col-md-4"  id="margem">	
						<div class="zoom">
							<center>
								<a href="#" data-toggle="modal" data-target="#siteModal<?php echo $Filmes[$i]['IdFilmes'];?>" >
									<img src="<?php echo $Filmes[$i]['Poster']?>">
								</a>
							</center>
						</div>

						<center><h4><strong><?php echo $Filmes[$i]['Title']?></strong></center></h4>
						<center><h4><strong>Gênero:<?php echo $Filmes[$i]['Genre']?></strong></center></h4>
						<center><h4><strong>Duração:<?php echo $Filmes[$i]['Runtime']?></strong></center></h4>
					</div>
					
				
									
			<!-- Modal -->
			<div class="modal" id= "siteModal<?php echo $Filmes[$i]['IdFilmes'];?>" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content">

						<!-- Cabecalho -->
						<div class="modal-header">
							<h4 class="modal-title text-center">Ficha Técnica</h4>
							<button type="button" class="close" data-dismiss="modal">
							<span>x</span>
							</button>
						</div>

						<!-- Corpo -->
						<div class="modal-body">
							<table cellspacing="0" cellpadding="0" border="0" class="nm-title-overview-widget-layout">
								<tbody>
									<tr>
										<td rowspan="2" valign="top" >
											<a><?php echo "<img id='img_margem' width = '200x' height='230px' src= ". $Filmes[$i]['Poster'].'"'?></center></a>
										</td>
										<td>
											<h4> Título: <?php echo $Filmes[$i]["Title"]; ?></a></h4>
											<span>Nota: <?php echo $Filmes[$i]["imdbRating"]; ?></span>

											<div>
												<h5 class="inline">Diretor:</h5>
												<span>
													<span>
														<a href="#"><?php echo $Filmes[$i]["Director"];?></a>                                
													</span>
												</span>			
											</div> 
											
											<div>
												<h5>Atores:</h5>
												<span itemprop="name">
													<a href="#"><?php echo $Filmes[$i]["Actors"];?></a>
												</span>  
											</div> 
										</td>
									</tr>
									
									<tr>
										<td class="overview-bottom">
											<a href="https://www.imdb.com/title/<?php echo $Filmes[$i]['IdFilmes']   ?>">Veja mais</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>      
				
						<!-- Rodapé -->
						<div class="modal-footer">

						</div>
					</div>
		
				</div>
			</div><!--Fim Modal-->
			
			<?php } ?>
			</div>
		</div>
	</section>

    <section id="recursos">
      <div class="container">
        <div class="row">

          <!--recursos -->
          <div class="col-md-4">
          <h2>Coleção de Filmes</h2>

            <h3>Dispositivos Móveis</h3>
            <p>Também estamos em seus aparelhos portáteis.</p>

            <h3>Lançamentos</h3>
            <p>Veja os novos lançamentos. Todos os filmes estão aqui primeiro.</p>

            <h3>Free</h3>
            <p>Aproveite o melhor do cinema sem gastar nada!</p>

          </div>

          <!-- img recursos -->
          <div class="col-md-8">

          <div class ="row">
              <div class="col-md-6">
                
              </div>

               <div class="col-md-6">
                <img src="imagens/iphone2.png" class="img-responsive">
              </div>
            </div><!--row-->

          </div>

        </div><!--row-->    
      </div>

    </section>


    <!-- Rodape -->
    <footer id = "rodape">
      <div class="container">
        <div class="row">

        <div class="col-md-2">
          <span class = "img-logo"></span>
        </div>

        <div class="col-md-2">
          <h4>Premium</h4>
         
        </div>

        <div class="col-md-2">
          <h4>Free</h4>
          
        </div>

        <div class="col-md-2">
          <h4>Entrar</h4>
         
        </div>

        <div class="col-md-4">
          <ul class="nav">
            <li class="item-rede-social"><a href="#" ><img src="imagens/facebook.png"></a></li>
            <li class="item-rede-social"><a href="#"><img src="imagens/instagram.png"></a></li>
            <li class="item-rede-social"><a href="#"><img src="imagens/twitter.png"></a></li>
          </ul>
        </div>
          
          
        </div><!--row-->


      </div>
    </footer>

   
   

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>