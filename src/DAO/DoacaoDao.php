


<?php

class DoacaoDao
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

	public function insert(DoacaoModel $model)
	{

		$sql = "INSERT INTO doacao(data_doacao, descricao, doador_id, ong_id) values (?, ?, ?,? );";

		$stmt = $this->conexao->prepare($sql);

		$stmt->bindValue(1, $model->data_doacao);
		$stmt->bindValue(2, $model->descricao);
		$stmt->bindValue(3, $model->doador_id);
		$stmt->bindValue(4, $model->ong_id);
		

		try {
			$stmt->execute();
		} catch (PDOException $e) {
			if ($e->getCode() == '23000') {
				return false;
				exit;
			}
		}
	}


	public function selectDoacaoData(string $ong_id, string $data_doacao){
		
		$sql = "SELECT doacao.*, doador.nome, ong.email FROM doacao, doador, ong WHERE doador_id = doador.id AND ong_id = ong.id AND ong.email like ? and data_doacao LIKE ?";

		$stmt = $this->conexao->prepare($sql);
		$stmt->bindValue(1, $ong_id);
		$stmt->bindValue(2, $data_doacao);
		$stmt->execute();

		return $stmt->fetchAll(PDO::FETCH_CLASS);

	} 
	public function selectDoacao(string $ong_id){
		
		$sql = "SELECT doacao.*, doador.nome, ong.email FROM doacao, doador, ong WHERE doador_id = doador.id AND ong_id = ong.id AND ong.email like ?";

		$stmt = $this->conexao->prepare($sql);
		$stmt->bindValue(1, $ong_id);
		$stmt->execute();

		return $stmt->fetchAll(PDO::FETCH_CLASS);

	} 
	
}
