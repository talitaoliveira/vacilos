<?php

class Vacilo{

	public static $table = "vacilo";

	private $id;
	private $descricaoVacilo;
	private $dataVacilo;
	private $dataCadastro;
	private $tipoVacilo;
	private $excluido;
	private $usuarioId;

	public function __construct($id=null,$descricaoVacilo=null,$dataVacilo=null,$dataCadastro=null,$tipoVacilo=null,$excluido=null,$usuarioId=null){

		$this->id        		= $id;
		$this->descricaoVacilo	= $descricaoVacilo;
		$this->dataVacilo 		= $dataVacilo;
		$this->dataCadastro  	= $dataCadastro;
		$this->tipoVacilo    	= $tipoVacilo;
		$this->excluido      	= $excluido;
		$this->usuarioId 	 	= $usuarioId;
	}

	public function getId()
	{
	    return $this->id;
	}
	
	public function setId($id)
	{
	    return $this->id = $id;
	}

	public function getDescricaoVacilo()
	{
	    return $this->descricaoVacilo;
	}
	
	public function setDescricaoVacilo($descricaoVacilo)
	{
	    return $this->descricaoVacilo = $descricaoVacilo;
	}

	public function getDataVacilo()
	{
	    return $this->dataVacilo;
	}
	
	public function setDataVacilo($dataVacilo)
	{
	    return $this->dataVacilo = $dataVacilo;
	}

	public function getDataCadastro()
	{
	    return $this->dataCadastro;
	}
	
	public function setDataCadastro($dataCadastro)
	{
	    return $this->dataCadastro = $dataCadastro;
	}

	public function getTipoVacilo()
	{
	    return $this->tipoVacilo;
	}
	
	public function setTipoVacilo($tipoVacilo)
	{
	    return $this->tipoVacilo = $tipoVacilo;
	}

	public function getExcluido()
	{
	    return $this->excluido;
	}
	
	public function setExcluido($excluido)
	{
	    return $this->excluido = $excluido;
	}

	public function getUsuarioId()
	{
	    return $this->usuarioId;
	}
	
	public function setUsuarioId($usuarioId)
	{
	    return $this->usuarioId = $usuarioId;
	}


}