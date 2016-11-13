<?php
	include("usuario.inc");

	class Cliente extends Usuario {
		var $rg;
		var $cpf;
		var $endereco;
		var $dataDeNascimento;

		public function __construct($nome, $endereco, $telefone, $email, $foto = "", $login, $senha, $rg, $cpf, $dataDeNascimento){
			Usuario::setNome($nome);
			Usuario::setTelefone($telefone);
			Usuario::setEmail($email);
			Usuario::setFoto($foto);
			Usuario::setLogin($login);
			Usuario::setSenha($senha);
			$this->rg = $rg;
			$this->cpf = $cpf;
			$this->endereco = $endereco;
			$this->dataDeNascimento = $dataDeNascimento;
		}

		public function cadastrar(){
			$conn = mysqli_connect("localhost", "root", "", "banco_projeto_av2");
			if(mysqli_connect_errno()){
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
				exit();
			}
		 	mysqli_query($conn, "INSERT INTO Clientes (id, nome, endereco, telefone, email, foto, login, senha, rg, cpf, dataDeNascimento) VALUES (null, '".Usuario::getNome()."','".$this->endereco."','".Usuario::getTelefone()."','".Usuario::getEmail()."','".Usuario::getFoto()."','".Usuario::getLogin()."','".Usuario::getSenha()."','".$this->rg."','".$this->cpf."','".$this->dataDeNascimento."');");
		 	Mysqli_close($conn);
		}
	}

	$nome = $_POST['nome'];
	$telefone = $_POST['telefone'];
	$email = $_POST['email'];
	$dataDeNascimento = $_POST['dataDeNascimento'];
	$endereco = $_POST['endereco'];
	$rg = $_POST['rg'];
	$cpf = $_POST['cpf'];
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	$foto = $_POST['foto'];

	$cliente = new Cliente($nome, $endereco, $telefone, $email, $foto, $login, $senha, $rg, $cpf, $dataDeNascimento);

	$cliente->cadastrar();
?>