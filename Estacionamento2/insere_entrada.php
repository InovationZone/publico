<?php
	//verifica se as sessions estão preenchidas
	include_once("status_logado.php");
	require_once('db.class.php');

	$placa = $_POST['txtplaca'];
	
		//nao permite carcateres especiais
		//if ( !empty( $placa) && preg_match( '/^[\w\n\s]+$/i' , $placa ) ){
			$tipo = $_POST['cmbtipo'];
			$marca = $_POST['txtmarca'];
			$modelo = $_POST['txtmodelo'];
			$cor = $_POST['txtcor'];
			$cobranca = $_POST['cmbcobranca'];
			$obs  = $_POST['txtobs'];		
			$objDb = new db();
			$link = $objDb->conecta_mysql();
	
			$sql = "INSERT INTO TBL_COBRANCA (COB_PLACA,COB_MARCA,COB_MODELO,COB_COR,COB_OBS,ID_TIPO) VALUES('$placa','$marca','$modelo','$cor','$obs',$tipo)";  
			if(mysqli_query($link,$sql)) {
				echo "<div class='alert alert-success' id='resposta' role='alert'>Entrada efetuada com sucesso!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
			}else {
				echo "<div class='alert alert-danger' id='resposta' role='alert'>Erro ao efetuar a entrada. Entrar em contato com o administrador do sistema.<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
			
			}
			
		/*} else {
			echo "Só são permitidos letras , números";
			die();
		}*/

	
	
?>

	

