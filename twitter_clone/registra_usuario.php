<?php

	require_once('db.class.php');

	$usuario =  $_POST['usuario'];
	$email =  $_POST['email'];
	$senha = md5($_POST['senha']);

	$objDb = new db();
	$link  = $objDb->conecta_mysql();

	//verificar se o usuário já existe

	$sql = "select * from usuarios where usuario = '$usuario' ";
	if($resultado_id = mysqli_query($link, $sql)) {

		 $dados_usuario = mysqli_fetch_array($resultado_id);

		 if(isset($dados_usuario['usuario'])){
		 	echo 'Usuario já cadastrado';

		 } else {
		 	echo 'Usuário não cadastrado';

		 }

		 var_dump($dados_usuario);

	} else {
		echo 'Erro ao tentar localizar o registro de usuário';
	}

	//verificar se o e-mail já existe

	$sql = "select * from usuarios where email = '$email' ";
	if($resultado_id = mysqli_query($link, $sql)) {

		 $dados_email = mysqli_fetch_array($resultado_id);

		 if(isset($dados_email['usuario'])){
		 	echo 'E-mail já cadastrado';

		 } else {
		 	echo 'E-mail não cadastrado';

		 }

		 var_dump($dados_email);

	} else {
		echo 'Erro ao tentar localizar o registro de usuário';
	}

	die();

	$sql = "insert into usuarios(usuario,email,senha) values('$usuario','$email','$senha')";

	//executando a query
	if(mysqli_query($link, $sql)){
		echo 'usuario registrado com sucesso!';
		header('Location: index.php');
	}else {
		echo 'ERRO!';
		
	}
	



?>