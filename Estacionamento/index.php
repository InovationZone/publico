<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Estacionamento</title>
		<!--Css-->
		<link href ="assets/css/estilo.css" rel="stylesheet" type="text/css">
		<!--Bootstrap-->
		<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<!--Jquery-->
		<script src="assets/js/jquery-2.2.4.min.js"></script>
		
		<!--Meu js-->
		<script src="assets/js/scripts.js"></script>
		
	
	</head><!--Fim head-->
	
	<body class="text-center">
		<!--Limpando as sessions sempre no primeiro acesso-->
		<?php
			unset ($_SESSION['usuario'],
					$_SESSION['nivel'],
					$_SESSION['usuarioNome']);
			
		?>
		<div class="container">
			<form action="validar_acesso.php" class="form-signin" method="post">
				<img class="mb-4" src="https://getbootstrap.com/docs/4.1/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
				<h1 class="h3 mb-3 font-weight-normal">Entrar</h1>
				<label class="sr-only" required>Usuário</label>
				<input  class="form-control" id="inputusuario" placeholder="Digite o usuário" name="txt_usuario" required autofocus>
				<label for="inputPassword" class="sr-only">Senha</label>
				<input type="password" id="inputPassword" class="form-control" name="txt_senha" placeholder="Digite a Senha" required>
				<div class="checkbox mb-3">
					<label>
						<input type="checkbox" value="remember-me"> Lembrar-me
					</label>
				</div>
				<button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
				<p class="mt-5 mb-3 text-muted">&copy;2018</p>
			</form><!--Fim do Form-->
	
			<!--Tratando erro de login-->
			<p class ="text-center text-danger">
				<?php 
					if(isset($_SESSION['loginErro'])){
						//imprimo o erro e limpo a session
						echo $_SESSION['loginErro'];
						unset ($_SESSION['loginErro']);
					
					}
					
				?>
			</p><!--Fim do Parágrafo-->
		</div><!--Fim do Container-->
		
		
	</body>

	

</html>