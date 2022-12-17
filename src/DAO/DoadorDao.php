


<?php

class DoadorDao
{

	private $conexao;

	//construtor da classe
	public function __construct()
    {
        include_once "Conn/Conn.php";

        $conn = new Conn();
        $this->conexao = $conn->returnConnection();
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
