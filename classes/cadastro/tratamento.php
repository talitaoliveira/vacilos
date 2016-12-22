<?php

/*spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});*/

require_once (dirname(__FILE__). '/UsuarioCrud.php');
require_once (dirname(__DIR__). '/Usuario.php');

$json = array();


try{

	if($_POST['login'] == ""){
		throw new Exception('Campo login n&atilde;o pode ser em branco');
	}

	if($_POST['email'] == ""){
		throw new Exception('Campo email n&atilde;o pode ser em branco');
	}

	if($_POST['senha'] == ""){
		throw new Exception('Campo senha n&atilde;o pode ser em branco');
	}

	if($_POST['confirma-senha'] == ""){
		throw new Exception('Campo confirma-senha n&atilde;o pode ser em branco');
	}

	if($_POST['senha'] != $_POST['confirma-senha']){
		throw new Exception('Campo de confirmar a senha n&atilde;o confere com a senha');
	}

	$usuario = new Usuario(null,$_POST['login'],$_POST['email'],$_POST['senha']);

	UsuarioCrud::getInstance()->insert($usuario);

	$json['status'] = true;
	$json['mensagem'] = "Cadastro Ralizado.";

}catch(Exception $e){

	$json['status'] = false;
	$json['mensagem'] = $e->getMessage();
}

echo json_encode($json);
