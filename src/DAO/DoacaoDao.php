


<?php
// Criando o DAO da Doação
class DoacaoDao
{

	//Criando Variavel de conexão 
	private $conexao;

	//Método construtor da classe
    public function __construct()
    {
        include_once "Conn/Conn.php";

        $conn = new Conn();
        $this->conexao = $conn->returnConnection();
    }


	//Método para inserir uma nova Doação
	public function insert(DoacaoModel $model)
	{
		// sql usado no banco de dados
		$sql = "INSERT INTO doacao(data_doacao, descricao, doador_id, ong_id) values (?, ?, ?,? );";

		//Preparando o comando para ser execudado
		$stmt = $this->conexao->prepare($sql);

		/*Setando valores nas linhas das tabelas */
		$stmt->bindValue(1, $model->data_doacao);
		$stmt->bindValue(2, $model->descricao);
		$stmt->bindValue(3, $model->doador_id);
		$stmt->bindValue(4, $model->ong_id);
		
		/*Utilizando o Try Catch para a execução */
		try {
			$stmt->execute();
		} catch (PDOException $e) {
			if ($e->getCode() == '23000') {
				return false;
				exit;
			}
		}
	}

	//Método para selecionar a data de doação
	public function selectDoacaoData(string $ong_id, string $data_doacao){
		//SQL utilizado para achar a data
		$sql = "SELECT doacao.*, doador.nome, ong.email FROM doacao, doador, ong WHERE doador_id = doador.id AND ong_id = ong.id AND ong.email like ? and data_doacao LIKE ?";
		
		/*Setando valores nas linhas das tabelas */
		$stmt = $this->conexao->prepare($sql);
		$stmt->bindValue(1, $ong_id);
		$stmt->bindValue(2, $data_doacao);
		$stmt->execute();

		return $stmt->fetchAll(PDO::FETCH_CLASS);

	} 

	//Método para selecionar a Doação
	public function selectDoacao(string $ong_id){
		//SQL utilizado para achar a doação
		$sql = "SELECT doacao.*, doador.nome, ong.email FROM doacao, doador, ong WHERE doador_id = doador.id AND ong_id = ong.id AND ong.email like ?";

		/*Setando valores nas linhas das tabelas */
		$stmt = $this->conexao->prepare($sql);
		$stmt->bindValue(1, $ong_id);
		$stmt->execute();

		return $stmt->fetchAll(PDO::FETCH_CLASS);

	} 

	
	//Método para selecionar a Doação
	public function selecionarDoacoes(string $doador_email){
		//SQL utilizado para achar a doação
		$sql = "SELECT doacao.*, doador.nome, ong.email, ong.nome as ong_nome FROM doacao, doador, ong WHERE doador_id = doador.id AND ong_id = ong.id AND doador.email like ?";

		/*Setando valores nas linhas das tabelas */
		$stmt = $this->conexao->prepare($sql);
		$stmt->bindValue(1, $doador_email);
		$stmt->execute();

		return $stmt->fetchAll(PDO::FETCH_CLASS);

	} 
	
}
