<?php
	//verifica se as sessions estão preenchidas
	include_once("status_logado.php");
	
?>



<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Estacionamento</title>
		<!--Css-->
		<link href ="assets/css/estilo.css" rel="stylesheet" type="text/css">
		<!--Bootstrap-->
		<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<!--Jquery-->
		<script src="assets/js/jquery-2.2.4.min.js"></script>
		
		
		<script src="assets/js/scripts.js"></script>
	
		
	</head><!--Fim head-->
	
	
	
	<body>
		
		<div id="topo">
		
			<!--icone menu"-->
			<label for="chk" class="menu-icone" id="icone">&#9776;</label>
			<div class="img-logo">
				logo
			</div><!--Fim logo-->
		</div><!--Fim topo-->
		
		<div class="col-md-2 col-xs-4 sidebar" id="barra_lateral">
			<nav class="menu">
				<ul>
					<li><a href="#" class="voltar" id="esconder">Voltar</a></li>
					<li><a href="inicio.php" class="formata_link">Início</a></li>
					<li><a href="#" class="formata_link" id="submenufluxo">Fluxo de Veículos<span>+</span></a></li>
					<li><a href="#" class="url_carregamento submenu" id="entrada">Entrada</a></li>
					<li><a href="#" class="formata_link submenu" id="saida">Saída</a></li>
					<li><a href="#" class="formata_link">Controle de Caixa</a></li>
					<li><a href="#" class="formata_link" id="submenucad">Cadastros<span>+</span></a></li>
					<li><a href="#" class="url_carregamento formata_link submenu " id="clientes">Clientes</a></li>
					<li><a href="#" class="formata_link submenu" id="veiculos">Veículos</a></li>
					<li><a href="#" class="formata_link">Perfil</a></li>
					<li><a href="#" class="formata_link">Sinistros</a></li>
					<li><a href="#" class="formata_link">Relatórios</a></li>
					<li><a href="#" class="formata_link">Configurações</a></li>
					<div class= "separador"></div><!--Fim  separador-->
					<li><a href="sair.php" id="formata_link">Sair</a></li>
				</ul><!--Fecha ul-->
			</nav><!--Fecha Nav-->
			
		
			
			
			
			<!--<div class= "usuario">
				<span class ="usuário-logado">Usuário: </span></br>
				<span class ="usuário-logado">último acesso: 15/07/2018 14:49</span>
			</div>-->
			
		</div>
		
		
		<div id="content">
			<img class = "loader" id="loader" src="imagens/loader.gif">
				<!--imagem de carregamento"-->			
		</div>
	</body>

</html>