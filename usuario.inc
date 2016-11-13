<?php
	abstract class Usuario {
		var $nome;
		var $email;
		var $telefone;
		var $foto;
		var $usuario;
		var $senha;
		var $tipo;

		public abstract function cadastrar();

		public function setNome($nome){
			$this->nome = $nome;
		}

		public function getNome(){
			return $this->nome;
		}

		public function setEmail($email){
			$this->email = $email;
		}

		public function getEmail(){
			return $this->email;
		}

		public function setTelefone($telefone){
			$this->telefone = $telefone;
		}

		public function getTelefone(){
			return $this->telefone;
		}

		public function setFoto($foto){
			$this->foto = $foto;
		}

		public function getFoto(){
			return $this->foto;
		}

		public function setLogin($login){
			$this->login = $login;
		}

		public function getLogin(){
			return $this->login;
		}

		public function setSenha($senha){
			$this->senha = $senha;
		}

		public function getSenha(){
			return $this->senha;
		}
	}
?>