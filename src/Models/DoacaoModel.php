

<?php


class DoacaoModel
{

	//Método salvar
	public function save()
	{
		include 'DAO/DoacaoDao.php';

		$dao = new DoacaoDao();

		if ($dao->insert($this) === false) {
			return false;
		} else {
			return true;
		}
	}


	//Pegando as linhas da tabela doador
	public function getAllRows(string $ong_id, string $data_doacao)
	{
		include 'DAO/DoacaoDao.php';

		$dao = new DoacaoDao();
		$obj = $this->rows = $dao->selectDoacaoData($ong_id, $data_doacao);
		if ($obj) {
			return $obj;
		} else {
			return false;
		}
	}

	public function getAll(string $ong_id)
	{
		include 'DAO/DoacaoDao.php';

		$dao = new DoacaoDao();
		$obj = $this->rows = $dao->selectDoacao($ong_id);
		if ($obj) {
			return $obj;
			exit;
		} else {
			return false;
		}
	}
}
