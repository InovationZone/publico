<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Celke - datepicker</title>
   
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<link href="assets/bootstrap/css/bootstrap-datepicker.css" rel="stylesheet"/>
		<script src="assets/bootstrap/js/bootstrap-datepicker.min.js"></script> 
		<script src="assets/bootstrap/js/bootstrap-datepicker.pt-BR.min.js" charset="UTF-8"></script>
		
	</head>
	<body>
		<div class="container">
			<h1>Cadastar Data</h1>
			<form class="form-horizontal">
				 <div class="form-group">
					<label class="col-sm-2 control-label">Data</label>
					<div class="col-sm-10">
						<div class="input-group date">
							<input type="text" class="form-control" id="exemplo" >
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-th"></span>
							</div>
						</div>

					</div>
				  </div>
				  
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-success">Cadastrar</button>
					</div>
				</div>
			</form>
		</div>
		
		<script type="text/javascript">
			$('#exemplo').datepicker({	
				format: "dd/mm/yyyy",	
				language: "pt-BR",
				startDate: '+0d',
			});
		</script>
	</body>
</html>



