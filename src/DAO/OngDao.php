


<?php

class OngDao
{

	private $conexao;

	//construtor da classe
	public function __construct()
    {
        include_once "Conn/Conn.php";

        $conn = new Conn();
        $this->conexao = $conn->returnConnection();
    }

	//adicionando ongs no banco de dados
	public function insert(OngModel $model)
	{

		$sql = "INSERT INTO ong(cnpj,nome,email,senha,confirma_senha,tipo_usuario) VALUES (?,?,?,?,?,?);";

		$stmt = $this->conexao->prepare($sql);

		$stmt->bindValue(1, $model->cnpj);
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


	//Pegando todas as Ongs do banco de dados
	public function getAllOngs() {

		$sql = "SELECT * FROM ong ORDER BY nome ASC";

		$stmt = $this->conexao->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_CLASS);
	}
}
