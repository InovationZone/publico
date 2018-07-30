<?php
	include_once('status_logado.php');
	
	require_once('db.class.php');
	
	
	
	$marca = $_POST["txtmarca"];
	$id_tipo = $_POST['id_tipo'];

	
	$sql = "select * from tbl_marca where mar_nome like '%$marca%' and id_tipo = $id_tipo order by mar_nome limit 3";	
	
	$objDb = new db();
	$link = $objDb->conecta_mysql();
	
	$resultado = mysqli_query($link,$sql);
	$rows = mysqli_num_rows($resultado);
	
	if($rows) {
			echo '<ul>';
			while($linha  = mysqli_fetch_assoc($resultado)) {
					echo'
						<li><a href="#"  id="mar_nome">'.$linha['MAR_NOME'].'</a></li>';					 									 
			}
			echo '</ul>';
	} else {
		echo "Nenhuma marca encontrada";
		
	}
	
	
	
?>