<?php

/*spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});*/

require_once (dirname(__FILE__). '/VaciloCrud.php');

$json = array();

try{

	if($_POST['descricao_vacilo'] == ""){
		throw new Exception('Campo descricao_vacilo n&atilde;o pode ser em branco');
	}

	if($_POST['data_vacilo'] == ""){
		throw new Exception('Campo data_vacilo n&atilde;o pode ser em branco');
	}

	$vacilo = new Vacilo(null,$_POST['descricao_vacilo'],$_POST['data_vacilo']);

	VaciloCrud::getInstance()->insert($vacilo);

	$json['status'] = true;
	$json['mensagem'] = "Vacilo inserido, seu merda.";

}catch(Exception $e){

	$json['status'] = false;
	$json['mensagem'] = $e->getMessage();
}

echo json_encode($json);
