<?php
	//iniciando uma sessao
	session_start();

	require_once('db.class.php');

	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];


	$sql = "select * from tbl_usuarios where usu_login = '$usuario' and usu_senha = '$senha'";
	//var_dump($sql);
	//die();

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

		if(isset ($dados_usuario['usu_nome']) and ($dados_usuario['usu_nivel'] <> 'A')){
			header('Location: index.php?erro=1');
			exit;

		}

		//isset verifica se existe
		if(isset ($dados_usuario['usu_nome'])){
			//preenchendo a session
			$_SESSION['usuario'] = $dados_usuario['usu_nome'];
			$_SESSION['email'] = $dados_usuario['usu_email'];

			//redirecionando usuário
			header('Location: gera_relato.php');

		} else {
			//Quando não existe usuário no banco, é passado para index com um parametro de erro = 1
		  	header('Location: index.php?erro=2');

		}

	} else {
		echo 'Erro na execução da consulta. Entre em contato com o administrador.';

	}

	
?>