<?php
	session_start();

	if(!isset($_SESSION['usuario'])){
		header('Location: index.php?erro=1');
	}

	require_once('db.class.php');
	
	$nome_pessoa = $_POST['nome_pessoa'];
	
	
	$id_usuario = $_SESSION['id_usuario'];
	

	$objDb = new db();
	$link  = $objDb->conecta_mysql();


	$sql = "select * from usuarios where usuario = '$nome_pessoa' and id <> '$id_usuario'";
	

	$resultado_id = mysqli_query($link,$sql);

	if($resultado_id){

		while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)) {
			echo '<a href="#" class="list-group-item">';
				echo '<strong>Nome</strong> - <small> - email </small>';
			echo '</a>';

		}

	} else {
		echo "Erro na consulta de usuários no banco de dados!";
	}



?>