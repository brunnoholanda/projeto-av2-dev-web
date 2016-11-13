<?php
	$conn = new mysqli("localhost", "root", "", "banco_projeto_av2");

	if ($conn->connect_errno) 
	{
    	echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
	}

	$busca = $conn->query("SELECT login, senha FROM clientes ORDER BY nome ASC");

	for($row_no = $busca->num_rows - 1; $row_no >= 0; $row_no--)
	{

		$busca->data_seek($row_no);
		$linha = $busca->fetch_assoc();

		if($_POST['login'] == $linha['login'])
		{
			if($_POST['senha'] == $linha['senha'])
			{
				session_start();

				if(!isset($_SESSION['count']))
				{
					$_SESSION['count'] = 0;
				}
				else 
				{
					$_SESSION['count']++;
				}

				include("painel-cliente.php"); 	
			} 
			else 
			{
				echo "Senha incorreta";
			}
		} 
		else 
		{
			echo "Usuário incorreto ou inexistente"; 
		}
	}
?>