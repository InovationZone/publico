<?php
	session_start();
	//destruo a sessao
	session_destroy();
	
	//limpo as sessoes
	unset ($_SESSION['usuario'],
		   $_SESSION['nivel'],
		   $_SESSION['usuarioNome']);

	//redirecino para a index
	header('location: index.php');

?>
