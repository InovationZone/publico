<?php


	require_once('db.class.php');


	$sql = "select * from usuarios'";

	$objDb = new db();
	$link  = $objDb->conecta_mysql();

	//update true/false
	//insert true/false
	//select false/resource
	//delete true/false


	$resultado_id = mysqli_query($link, $sql);

	if($resultado_id) {
		//retorna os dados em uma estrutura de Array
		//a função assoc, associa o array de acordo com o nome da coluna do banco de dados
		//se trocar both por assoc - organiza por numero
		$dados_usuario = array();

		mysqli_fetch_array($resultado_id, MYSQLI_ASSOC);

		while($linha = mysqli_fetch_array($resultado_id,MYSQLI_ASSOC)){
			$dados_usuario[] = $linha;
		}

	} else {
		echo 'Erro na execução da consulta. Entre em contato com o administrador.';

	}

	
?>