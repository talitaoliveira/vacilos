<?php

require_once (dirname(__DIR__). '/DB.php');

class UsuarioCrud extends DB{

	protected $table = "usuario";
	private static $instance;

	private $conn;

	public function __construct(){
		$this->conn = DB::getInstance();
	}

	public static function getInstance(){
		if(!isset(self::$instance)){
			self::$instance = new UsuarioCrud();
		}
		return self::$instance;
	}

	private function criarObjeto($registro){

		$objUsuario = new Usuario($registro['id'],
								 	$registro['login'],
								 	$registro['email'],
								 	$registro['senha'],
								 	$registro['data_cadastro']);

		return $objUsuario;

	}

	public function insert(Usuario $objUsuario){
		try{

			$sql = "INSERT INTO {$this->table} (login,
												email,
												senha,
												data_cadastro)
										VALUES (:login,
												:email,
												:senha,
												now())";
			$stmt = $this->conn->prepare($sql);
			$stmt->bindValue(":login",$objUsuario->getLogin());
			$stmt->bindValue(":email",$objUsuario->getEmail());
			$stmt->bindValue(":senha",md5($objUsuario->getSenha()));

			return $stmt->execute();

		}catch(PDOException $e){
			throw new PDOException("ERRO INSERIR: " . $e->getMessage());
		}
	}

	public function login($login,$senha){
		try{

			$sql = "SELECT * FROM {$this->table} WHERE login = :login AND senha = :senha";

			$stmt = $this->conn->prepare($sql);
			$stmt->bindValue(":login",$login);
			$stmt->bindValue(":senha",md5($senha));
			$stmt->execute();

			$arrayLogin = array();

			while($registro = $stmt->fetch()){

				$arrayLogin[] = $this->criarObjeto($registro);
			}

			return $arrayLogin;

		}catch(PDOException $e){
			throw new PDOException("ERRO INSERIR: " . $e->getMessage());
		}
	}
}