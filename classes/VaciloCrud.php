<?php

require_once (dirname(__FILE__). '/DB.php');
require_once (dirname(__FILE__) . '/Vacilo.php');

class VaciloCrud extends DB{

	protected $table = "vacilo";
	private static $instance;

	private $conn;

	public function __construct(){
		$this->conn = DB::getInstance();
	}

	public static function getInstance(){
		if(!isset(self::$instance)){
			self::$instance = new VaciloCrud();
		}
		return self::$instance;
	}

	public function insert(Vacilo $objVacilo){
		try{
			$sql = "INSERT INTO {$this->table} (descricao_vacilo,
											data_vacilo,
											data_cadastro)
									VALUES (:descricao_vacilo,
											:data_vacilo,
											now())";

			$stmt = $this->conn->prepare($sql);
			$stmt->bindValue(":descricao_vacilo",$objVacilo->getDescricaoVacilo());
			$stmt->bindValue(":data_vacilo",$objVacilo->getDataVacilo());

			return $stmt->execute();

		}catch(PDOException $e){
			throw new PDOException("ERRO INSERIR: " . $e->getMessage());
		}

	}
}