


<?php

class DoadorDao
{

	private $conexao;

	//construtor da classe
	public function __construct()
	{
		try {
			$dns = "mysql:host=localhost:3306;dbname=sos";
			$option = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
			$this->conexao = new PDO($dns, 'root', '1234', $option);
		} catch (\Throwable $th) {
			//throw $th;
		}
	}

	public function insert(DoadorModel $model)
	{

		$sql = "INSERT INTO doador(cpf,nome,email,senha,confirma_senha,tipo_usuario) VALUES (?,?,?,?,?,?);";

		$stmt = $this->conexao->prepare($sql);

		$stmt->bindValue(1, $model->cpf);
		$stmt->bindValue(2, $model->nome);
		$stmt->bindValue(3, $model->email);
		$stmt->bindValue(4, $model->senha);
		$stmt->bindValue(5, $model->confirma_senha);
		$stmt->bindValue(6, $model->tipo_usuario);

		try {
			$stmt->execute();
		} catch (PDOException $e) {
			if ($e->getCode() == '23000') {
				return false;
				exit;
			}
		}
	}


	public function select(){
		
		$sql = "SELECT * FROM doador";

		$stmt = $this->conexao->prepare($sql);
		$stmt->execute();

		return $stmt->fetchAll(PDO::FETCH_CLASS);
	} 
	
}
