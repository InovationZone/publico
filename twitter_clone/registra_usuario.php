<?php

	require_once('db.class.php');

	$usuario =  $_POST['usuario'];
	$email =  $_POST['email'];
	$senha = md5($_POST['senha']);

	$objDb = new db();
	$link  = $objDb->conecta_mysql();


	//variaveis responsaveis de verificar se o usuario ou email existem
	$usuario_existe = false;
	$email_existe = false;


	//verificar se o usuario ja existe
	$sql = "select * from usuarios where usuario = '$usuario' ";
	if($resultado_id = mysqli_query($link,$sql)) {
		$dados = mysqli_fetch_array($resultado_id);
	

		if(isset($dados['usuario'])){
			$usuario_existe = true;
		}
	} else {
		Echo 'erro ao tentar localizar o registro';
	}
	

	//verificar se o email ja existe
	$sql = "select * from usuarios where email = '$email' ";
	if($resultado_id = mysqli_query($link,$sql)) {
		$dados = mysqli_fetch_array($resultado_id);

		if(isset($dados['email'])){
			$email_existe = true;
		}
	} else {
		Echo 'erro ao tentar localizar o registro';
		
	}

	if($usuario_existe || $email_existe){

		//concatena um parametro para tratar o erro de login
		$retorno_get = '';

		if($usuario_existe) {
			$retorno_get.= "erro_usuario=1&";
		}

		if($email_existe) {
			$retorno_get.= "erro_email=1&";
		}
		header('Location: inscrevase.php?'.$retorno_get);
		//finaliza o script
		die();
	}

	
	$sql = "insert into usuarios(usuario,email,senha) values('$usuario','$email','$senha')";

	//executando a query
	if(mysqli_query($link, $sql)){
		echo 'usuario registrado com sucesso!';
		header('Location: index.php');
	}else {
		echo 'ERRO!';
		
	}
?>