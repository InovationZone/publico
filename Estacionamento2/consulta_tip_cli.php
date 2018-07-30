<?php
	include_once('status_logado.php');
	
	require_once('db.class.php');
	
	$placa = $_POST['txtplaca'];
	$id_tipo = $_POST['id_tipo'];
	
	
	

	
	$sql = "SELECT idmensalista FROM `tbl_mensalista` join tbl_veiculo on IDMENSALISTA = id_mensalista ";
	$sql = $sql."where vei_placa = '$placa' and id_tipo = $id_tipo";
	
	$objDb = new db();
	$link = $objDb->conecta_mysql();
	
	$resultado = mysqli_query($link,$sql);
	$rows = mysqli_num_rows($resultado);
	
	if($rows) {
		echo json_encode($resultado);
	} else	{
		echo json_encode(array("error" => "Avulso"));
	}
	
?>