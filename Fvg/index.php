<?php
    $erro = isset($_GET['erro']) ? $_GET['erro'] : 0 ;

?>
<!DOCTYPE html>
<html>
  <head>
  		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

		<meta content="text/html; charset=iso-8859-1" http-equiv="content-type">
		<title>&Aacute;rea Restrita</title>
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"

		name="viewport">
		<!-- Bootstrap 3.3.4 -->
		<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<!-- Font Awesome Icons -->
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"

		rel="stylesheet" type="text/css">
		<!-- Ionicons -->
		<!--<link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"

		rel="stylesheet" type="text/css">-->

		<link rel="shortcut icon" href= "/images/logo1.png" type="image/x-icon" />

		<!-- Theme style -->
		<link href="/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css">
		<!-- AdminLTE Skins. We have chosen the skin-blue for this starter page.
		However, you can choose any other skin. Make sure you apply the skin class        to the body tag so the changes take effect. -->
		<link href="/dist/css/skins/skin-blue.min.css" rel="stylesheet" type="text/css">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media
		queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file://
		-->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>        <![endif]-->
   
   		<style type="text/css">
			#body{
			background-color: #C5C2C2;
			}

			#footer{
			margin-left: auto; /* linha modificada */
			margin-right: auto; /* linha adicionada */
			margin-top:14.5%;
			text-align: center;
			}

			.titulo {
			font-family: Gotham, "Helvetica Neue", Helvetica, Arial, "sans-serif"
			}	

    	</style>            
  </head>


   
    <body>
	      <div class="container">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <img class="img-responsive" src="images/logo.png" />
	        </div>
    <?php
								if($erro == 2 ) {
									echo "<script>alert('Senha ou usuário incorretos. Tente novamente!');</script>";
								}

								if($erro == 1 ) {
									echo "<script>alert('Somente administradores podem acessar esta interface!');</script>";
								}

							?>
        <section class="content-header">
            <h1 class="titulo" align="center">Relatório dos Medicamentos</h1>	
             <div class="section">
           		 <div class="container">
               		 <div class="row" align="center">
                    	<div class="col-md-12">
                        	<h4 class="text-center">Insira seu Usuário e Senha</h4>
                     	</div>
               		 </div>
                <br/><br/>
                	<div class="row">
                    	<div class="col-md-offset-3 col-md-6">
						<form role="form" action="validar_acesso.php" method="post">
							<table class="table table-striped table-bordered table-condensed table-hover">
		   						<tr>
									<td>
									<input type="text" class="form-control" placeholder="Usuario" id="txt_usuario"
									name="usuario">
					 				</td>
								</tr>
						
			  					<tr>
			   						<td>                       
									<input type="password" class="form-control" placeholder="Senha" id="txt_senha"
									name="senha">
									</td> 
								</tr>

								<tr>
				 					<td>                                                      
					 					<div align="center">
										<input type="submit" name="button" id="button" value="Entrar" class="btn btn-success" ></div>
									
			 						</td>
								</tr>
							</table>
                        </form>
                   	 </div>
                	</div>
            	</div>
       		 </div>
        	</section>
        		</br></br>
     		 <div id="footer">
              	<strong>Copyright © 2018 <a href="www.guimaraessolutions.com">Projeto</a></strong>
             </div>

             <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
    </body>
</html>