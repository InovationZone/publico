<?php
	//verificacao de usuario logado
	//Para maior segurança, todas as sessions devem estar preenchidas
	session_start();	
	if((!isset($_SESSION['usuario'])) || (!isset($_SESSION['nivel'])) || (!isset($_SESSION['usuarioNome']))){
		//preencho a session com erro e redireciono para a index
		$_SESSION['loginErro'] = 'Área restrita para usuários cadastrados';
		header('Location: index.php');
	}
?>