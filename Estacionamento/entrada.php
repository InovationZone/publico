<?php
	date_default_timezone_set('America/Sao_Paulo');
	
	require_once('db.class.php');
	
?>
<div id="content"> 
	<div class="container-fluid">
		<div class="row">
            <div class="col-md-8">
				<div class="card">
					<div class="header">
						<h4 class="title">Entrada de veículo</h4>
					</div><!--fecha card-->
				<div class="content">
					<form name="frmEntrada" method="post">
						<div class="row">
							<div class="col-md-5">
								<div class="form-group">
									<label>Empresa</label>
									<input type="text" class="form-control" disabled placeholder="Company" value="Estacionamento">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label>Placa</label>
									<input type="text" class="form-control" placeholder="Digite a placa" name="txtplaca">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<?php
										$sql = "select * from tbl_tipo_veiculo";
										$objDb = new db();
										$link  = $objDb->conecta_mysql();
										$resultado = mysqli_query($link, $sql);
										$rows = mysqli_num_rows($resultado);	
										
									

										
									?>
								
									<label for="exampleInputEmail1">Tipo de veículo</label>
									<select class="form-control" name="cmbtipo">
										<?php
											while($linha = mysqli_fetch_array($resultado)){
												$id = $linha['IDTIPOVEICULO'];
												$tipo = $linha['TIP_NOME'];
												echo "<option>$tipo</option>";
											}
											
										?>
										
								    </select>
									
									
										
								</div>
							</div>
						</div><!--fecha row-->
						
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label>Marca</label>
									<select class="form-control" id="sel1" name="cmbmarca">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
								    </select>
								</div>
							</div>
							<div class="col-md-8">
								<div class="form-group">
									<label>Modelo</label>
									<input type="text" class="form-control" placeholder="Digite o modelo do veículo" name="txtmodelo">
								</div>
							</div>
							
						</div><!--fecha row-->

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Data</label>
									<input type="text" class="form-control" placeholder="Company" value="<?php echo date('d/m/Y');?>" name="txtdata" readonly>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Hora</label>
									<input type="text" class="form-control" placeholder="Last Name" value="<?php echo date('H:i:s');?>" name="txthora" readonly>
								</div>
							</div>
						</div><!--fecha row-->

						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Observação</label>
									<textarea rows="5" class="form-control" placeholder="Adicionar uma observação(caso necessário)" name="txtobs"></textarea>
								</div>
							</div>
						</div><!--fecha row-->
						
						<button type="submit" class="btn btn-info btn-fill pull-right">Efetuar entrada</button>
						<div class="clearfix"></div>
						
					</form><!--fecha form-->
				</div><!--fecha content-->
			</div><!--fecha colunas-->
        </div><!--fecha row-->       
    </div><!--container fluid-->          													  							  
</div><!-- /conteudo -->