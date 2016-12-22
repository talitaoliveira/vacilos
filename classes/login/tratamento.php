<?php

/*spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});*/

echo dirname(__FILE__)
require_once  (dirname(__DIR__). '/classes/cadastro/UsuarioCrud.php');
require_once (dirname(__FILE__). '/Usuario.php');

$json = array();


try{

	if($_POST['login'] == ""){
		throw new Exception('Campo login n&atilde;o pode ser em branco');
	}

	if($_POST['senha'] == ""){
		throw new Exception('Campo senha n&atilde;o pode ser em branco');
	}

	$loginEfetuado = UsuarioCrud::getInstance()->login($_POST['login'],$_POST['senha']);
	if($loginEfetuado){
		$json['status'] = true;
		$json['mensagem'] = "Login Efetuado";
	}else{
		$json['status'] = false;
		$json['mensagem'] = "Dados Não encontrados";
	}

}catch(Exception $e){

	$json['status'] = false;
	$json['mensagem'] = $e->getMessage();
}

echo json_encode($json);
