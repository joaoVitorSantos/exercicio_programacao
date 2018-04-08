<?php



	session_start();


	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];

	if ($usuario == 'admin' and $senha == "12345") {
		echo "Bem Vindo";
		$_SESSION['nome'] = "Administrador";
		$_SESSION['login'] = "admin";
		print_r($_SESSION); 
	}else{
		echo "Dados Inválidos";
	}