<?php

class Usuario{

	public static $table = "vacilo";

	private $id;
	private $login;
	private $email;
	private $senha;
	private $dataCadastro;

	public function __construct($id=null,$login=null,$email=null,$senha=null,$dataCadastro=null){

		$this->id 			= $id;
		$this->login		= $login;
		$this->email 		= $email;
		$this->senha  		= $senha;
		$this->dataCadastro = $dataCadastro;
	}

	public function getId()
	{
	    return $this->id;
	}
	
	public function setId($id)
	{
	    return $this->id = $id;
	}

	public function getLogin()
	{
	    return $this->login;
	}
	
	public function setLogin($login)
	{
	    return $this->login = $login;
	}

	public function getEmail()
	{
	    return $this->email;
	}
	
	public function setEmail($email)
	{
	    return $this->email = $email;
	}

	public function getSenha()
	{
	    return $this->senha;
	}
	
	public function setSenha($senha)
	{
	    return $this->senha = $senha;
	}

	public function getDataCadastro()
	{
	    return $this->dataCadastro;
	}
	
	public function setDataCadastro($dataCadastro)
	{
	    return $this->dataCadastro = $dataCadastro;
	}

}