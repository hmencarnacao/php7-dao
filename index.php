<?php 

	require_once("config.php");

	
	
	// $sql = new Sql();
	// $usuarios = $sql->select("SELECT * FROM tb_usuarios");
	// echo json_encode($usuarios);
	


	//Carrega um usuário
	//$data = new Usuario();
	//$data->loadById(4);
	// echo $data;


	// Carrega uma lista de usuarios
	//$lista = Usuario::getList();
	//var_dump($lista);


	// search
	// $data = Usuario::search("jo");
	// echo "<pre>";
	//	print_r($data);
	// echo "</pre>";


	// login
	// $usuario = new Usuario();
	// $usuario->login("hmencarnacao", "123456");
	// echo $usuario;


	// insert
	// $aluno = new Usuario("aluno xpto", "123456");
	// $aluno->insert();
	// echo $aluno;

	
	// update
	// $usuario = new Usuario();
	// $usuario->loadById(8);
	// $usuario->update("professor", "xpto");
	// echo $usuario;


	// apagar
	$usuario = new Usuario();
	$usuario->loadById(5);
	$usuario->delete();
	echo $usuario;



 ?>
