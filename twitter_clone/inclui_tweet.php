<?php
	session_start();
	require_once('db.class.php');


	if(!isset($_SESSION['usuario'])){
		header('Location: index.php?erro=1');
	}

	$texto_tweet = $_POST['texto_tweet'];

	$id_usuario = $_SESSION['id_usuario'];

	if ($texto_tweet == '' || $id_usuario == '') {
		die();

	}
		$objDb = new db();
		$link  = $objDb->conecta_mysql();

		$sql = "insert into tweet(id_usuario, tweet) values('$id_usuario','$texto_tweet')";

		
		mysqli_query($link,$sql);

	

?>