<?php
	//iniciando uma sessao
	session_start();

	require_once('db.class.php');

	$usuario = $_POST['txt_usuario'];
	$senha = md5($_POST['txt_senha']);

	$sql = "select * from tbl_usuario where usu_login = '$usuario' and usu_senha = '$senha'";
	

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
		if(isset ($dados_usuario['IDUSUARIO'])){
			
			//preenchendo a session
			$_SESSION['usuario'] = $dados_usuario['USU_LOGIN'];
			$_SESSION['nivel'] = $dados_usuario['ID_ACESSONIVEL'];
			$_SESSION['usuarioNome'] = $dados_usuario['USU_NOME'];

			//redirecionando usuário
			header('Location: inicio.php');

		} else {
			//Armazena erro na session e volta para a index
			$_SESSION['loginErro'] = 'Usuário ou senha Incorretos';
		  	header('Location: index.php');

		}

	} else {
		echo 'Erro na execução da consulta. Entre em contato com o administrador.';

	}

	
?>