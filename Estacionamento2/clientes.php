<?php
	date_default_timezone_set('America/Sao_Paulo');
	
	require_once('db.class.php');
	session_start();
	
	
	
?>
<div id="content"> 
	<div class="container-fluid">
		<div class="row">
            <div class="col-md-8">
				<div class="card">
					<div class="header">
						<h4 class="title">Cadastro de clientes</h4>
					</div><!--fecha card-->
				<div class="content">
					<form name="frmClientes" method="post" id="frmClientes"  action="teste.php">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Nome</label>
									<input type="text" id="txtplaca" class="form-control" placeholder="Digite o nome" name="txtnome" required>
								</div>
							</div>
							
							<div class="col-md-3">
								<label>Data de nascimento</label>
								<div class="input-group date">
									<input type="text" class="form-control" id="txtdata" placeholder="dd/mm/aaaa">
								
								</div>
							</div>
							
							<div class="col-md-3">
								<div class="form-group">
									<label>Sexo</label></br>
									<input type="radio" name="radsexo" id="radsexo" value ="M"><small>M</small></br>
									<input type="radio" name="radsexo" id="radsexo" value ="F"><small>F</small>								
								</div>
							</div>
						</div><!--fecha row-->
						
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label>Cep</label>
									<input type="text" class="form-control" placeholder="Digite o cep" name="txtcep"  id="txtcep" required>
								</div>
							</div>
							<div class="col-md-6">
								<span class="ajusta_cep">Informe o CEP (Campos adicionais preeenchidos automaticamente)</span>
							</div>					
						</div><!--Fecha row-->
							<div class="col-md-6">
								<div class="form-group">
									<label>Rua</label>
									<input required type="text" class="form-control"  placeholder="Digite a rua" name="txtrua" id="txtrua">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label>Bairro</label>
									<input required type="text" class="form-control"  placeholder="Digite o bairro" name="txtbairro" id="txtbairro">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label>Cidade</label>
									<input required type="text" class="form-control"  placeholder="Digite o bairro" name="txtcidade" id="txtcidade">
								</div>
							</div>
							
						</div><!--fecha row-->

						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label>Número</label>
									<input required type="text" class="form-control"  placeholder="Digite a nº" name="txtnumero" id="txtnumero" >
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Complemento</label>
									<input required type="text" class="form-control"  placeholder="Digite a nº" name="txtcomplemento" id="txtcomplemento" >
								</div>
							</div>
							<div class="col-md-1">
								<div class="form-group">
									<label>UF</label>
									<input type="text" id="txtplaca" class="form-control"  name="txtuf" id="txtuf" required >
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label>IBGE</label>
									<input type="text" id="txtplaca" class="form-control"  name="txtibge" id="txtibge" required >
								</div>
							</div>
							
							</div>
						</div><!--fecha row-->

						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label>Telefone</label>
									<input required type="text" class="form-control"  placeholder="Digite a nº" name="txtmodelo" id="txtmodelo" >
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label>Celular</label>
									<input required type="text" class="form-control"  placeholder="Digite a nº" name="txtmodelo" id="txtmodelo" >
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>E-mail</label>
									<input required type="text" class="form-control"  placeholder="Digite a nº" name="txtmodelo" id="txtmodelo" >
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


<script type="text/javascript">
		//mascara para os campos de data
		$(document).ready(function(){
			$('#txtdata').mask('00/00/0000');
			$('#txtdata').mask('00/00/0000');
			
			
		});

</script>




