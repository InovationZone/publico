<?php
	//verifica se as sessions estão preenchidas
	include_once("status_logado.php");
	
	
	require_once('db.class.php');
	

	
	
	

	$placa = $_POST['txtplaca'];
		//nao permite carcateres especiais
		if ( !empty( $placa) && preg_match( '/^[\w\n\s]+$/i' , $placa ) ){
			$tipo = $_POST['cmbtipo'];
			$marca = $_POST['txtmarca'];
			$modelo = $_POST['txtmodelo'];
			$cor = $_POST['cor'];
			$obs  = $_POST['txtobs'];
			
			$objDb = new db();
			$link = $objDb->conecta_mysql();
	
			$sql = "INSERT INTO TBL_COBRANCA (COB_PLACA,COB_MARCA,COB_MODELO,COB_COR,COB_OBS,ID_TIPO) VALUES('$placa','$marca','$modelo','$cor','$obs',$tipo)";  
			mysqli_query($link,$sql);
			
		} else {
			echo "Só são permitidos letras e números";
			die();
		}
	
	



	
	
	
?>

	
