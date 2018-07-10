<?php
	//iniciando uma sessao
	session_start();

	require_once('db.class.php');

	$usuario = $_POST['usuario'];
	$senha = md5($_POST['senha']);

	$sql = "select * from usuarios where usuario = '$usuario' and senha = '$senha'";

	$objDb = new db();
	$link  = $objDb->conecta_mysql();

	//update true/false
	//insert true/false
	//select false/resource
	//delete true/false


	$resultado_id = mysqli_query($link, $sql);

	if($resultado_id) {
		//retorna os dados em uma estrutura de Array
		$dados_usuario = mysqli_fetch_array($resultado_id);

		//isset verifica se existe
		if(isset ($dados_usuario['usuario'])){
			//preenchendo a session
			$_SESSION['id_usuario'] = $dados_usuario['id'];
			$_SESSION['usuario'] = $dados_usuario['usuario'];
			$_SESSION['email'] = $dados_usuario['email'];

			//redirecionando usuário
			header('Location: home.php');

		} else {
			//Quando não existe usuário no banco, é passado para index com um parametro de erro = 1
		  	header('Location: index.php?erro=1');

		}

	} else {
		echo 'Erro na execução da consulta. Entre em contato com o administrador.';

	}

	
?>