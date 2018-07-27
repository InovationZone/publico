<?php
	include_once('status_logado.php');
	
	require_once('db.class.php');
	
	$placa = $_POST['txtplaca'];

	
	$sql = "SELECT idmensalista FROM `tbl_mensalista` join tbl_veiculo on IDMENSALISTA = id_mensalista ";
	$sql = $sql."where vei_placa = '$placa'";
	
	$objDb = new db();
	$link = $objDb->conecta_mysql();
	
	$resultado = mysqli_query($link,$sql);
	$rows = mysqli_num_rows($resultado);
	
	if($rows) {
		echo "Mensalista";
	} else	{
		echo "Avulso";
	}
	
	
	
	
	


?>