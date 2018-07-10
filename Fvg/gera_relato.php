<?php
    //iniciando a sessao
	session_start();

	if(!isset($_SESSION['usuario'])){
		header('Location: index.php?erro=2');
	}


?>
<!DOCTYPE html>
<html>
  <head>
  		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

		<meta content="text/html; charset=UTF-8"  http-equiv="content-type">
		<title>Área Restrita</title>
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
    	


    	 <nav class="navbar navbar-default navbar-static-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <img src="images/logo.png" />
	        </div>
	        
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="sair.php">Sair</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>

	    <section class="content-header">
            <h1 class="titulo" align="center">Relatório FVG</h1>	
             <div class="section">
           		 <div class="container">
               		 <div class="row" align="center">
                    	<div class="col-md-12">
                        	<h4 class="text-center">Abaixo estão os relatos inseridos pelos usuários</h4>
                     	</div>
               		 </div>
                <br/><br/>
             
            	</div>
       		 </div>
        	</section>

         <?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
			?>

        <form  name = "formulario" method="post" action = "deleta_registro.php">
		    <table class="table table-striped">

		  		<thead>
				    <tr>
				      <th scope="col">ID</th>
				      <th scope="col">Marca</th>
				      <th scope="col">Nome</th>
				      <th scope="col">Dosagem</th>
				      <th scope="col">Início do tratamento</th>
				      <th scope="col">Fim do tratamento</th>
				      <th scope="col">Descricao </th>
				      <th scope="col">Gravidade</th>
				      <th scope="col">Desapareceu?</th>
				    </tr>
		  		</thead>

		  		<tbody>
				    <?php
						require_once("db.class.php");

						$sql = "select idrelato,
									   rel_marca,
									   rel_nome,
									   rel_dosagem, 
									   date_format(rel_qd_med_ini,'%d/%m/%Y') as rel_qd_med_ini , 
									   date_format(rel_qd_med_inter,'%d/%m/%Y') as rel_qd_med_inter ,
									   rel_descricao,
									   rel_gravidade,
									   case when rel_edv_desap = 1 then 'SIM' else 'NÃO' end 'desapareceu' 
									   
									   from tbl_relatos";


						$objDb = new db();
						$link  = $objDb->conecta_mysql();


						$query = mysqli_query($link, $sql);
						$row = mysqli_num_rows($query);

						if($row > 0) {
								while ($linha = mysqli_fetch_array($query)){

									$id = $linha['idrelato'];
									$rel_marca = $linha['rel_marca'];
									$rel_nome = $linha['rel_nome'];
									$rel_dosagem = $linha['rel_dosagem'];
									$rel_qd_med_ini = $linha['rel_qd_med_ini'];
									$rel_qd_med_inter = $linha['rel_qd_med_inter'];
									$rel_descricao = $linha['rel_descricao'];
									$rel_gravidade = $linha['rel_gravidade'];
									$rel_edv_desap = $linha['desapareceu'];
			
									echo " <tr>
										      <th>$id</th>
										      <td>$rel_marca</td>
										      <td>$rel_nome</td>
										      <td>$rel_dosagem</td>
										      <td>$rel_qd_med_ini</td>
										      <td>$rel_qd_med_inter</td>
										      <td>$rel_descricao</td>
										      <td>$rel_gravidade</td>
										      <td>$rel_edv_desap</td>
										      <td><a href='info_usuario.php?id=$id'</a><button type='button' class='btn btn-info bt-componente' type ='submit' >Mais</button></td>
										      <td><a href='deleta_registro.php?id=$id'</a><button type='button' class='btn btn-danger bt-componente' type ='submit' >Excluir</button></td>

										    </tr>";

								}		
						} else {
							echo 'Erro na execução da consulta. Entre em contato com o administrador.';
						}	
					?>
				  
		  		</tbody>
			</table>
		
		</form>     
             <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

           

			<script type="text/javascript">
			function deleta()
			  {
				$(".bt-componente").click(function()
				{
   					 var id = $(this).attr('id');
			   		 document.formulario.submit();
	
				});	
			  
				
			  }  
		</script>
    </body>
</html>




