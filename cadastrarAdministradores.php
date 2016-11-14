<?php
	include("usuario.inc");

	class Administradores extends Usuario {
		
		
		public function __constructs($nome, $email, $telefone, $foto, $login, $senha) {
			Usuario::setnome($nome);
			Usuario::setemail($email);
			Usuario::settelefone($telefone);
			Usuario::setfoto($foto);
			Usuario::setlogin($login);
			Usuario::setsenha($senha);
		} 
		public function cadastrar(){
			$conn = mysqli_connect("localhost", "root", "", "banco_projeto_av2");
			if(mysqli_connect_errno()){
				echo "Faleid to connect to MySQL: " . mysqli_connect_error();
				exit();
			}
			mysqli_query($conn, "INSERT INTO administradores (id, nome, telefone, email, foto, login, senha) VALUES (null, '".Usuario::getNome()."','".$this->getTelefone()."','".Usuario::getEmail()."','".Usuario::getFoto()."','".Usuario::getLogin()."','".Usuario::getSenha()."');");
			mysqli_close($conn);
		}
	}
		$nome = $_POST['nome'];
		$telefone = $_POST['telefone'];
		$email = $_POST['email'];
		$foto = $_POST['foto'];
		$login = $_POST['login'];
		$senha = $_POST['senha'];
		
		$Administradores = new Administradores($nome, $telefone, $email, $foto, $login, $senha);
		$Administradores->cadastrar();
		?>