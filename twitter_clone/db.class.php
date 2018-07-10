<?php
	class db {
		//host
		private $host = '192.185.209.81';

		//usuario
		private $usuario = 'guima203_adm';

		//senha
		private $senha = 'Guima#2018';

		//banco de dados
		private $database = 'guima203_versaty';

		public function conecta_mysql(){

			//criar conexao

			$con = mysqli_connect($this->host,$this->usuario,$this->senha,$this->database);


			//ajustar o charset de comunicação entre a aplicação e o banco de dados
			mysqli_set_charset($con,'utf-8');


			//verificar se houve erro de conexao

			if(mysqli_connect_errno()){
				echo 'Erro ao tentar se conectar com o BD MYSQL: '.mysqli_connect_error();
			}

			return $con;

		}
	}


?>