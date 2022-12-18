

<?php

//Criando a Classe DoacaoModel
class DoacaoModel
{

	//Método salvar
	public function save()
	{
		//Importando DoacaoDao.php
		include 'DAO/DoacaoDao.php';

		//Criando Objeto da DoacaoDao
		$dao = new DoacaoDao();

		//Verificando se returna true ou false.
		if ($dao->insert($this) === false) {
			return false;
		} else {
			return true;
		}
	}


	//Pegando todas as linhas da tabela doador
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

	//Selecioandno doacao	
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

	//Pegando todas as doações.
	public function getAllDoacoes(string $doador_email)
	{
		include 'DAO/DoacaoDao.php';

		$dao = new DoacaoDao();
		$obj = $this->rows = $dao->selecionarDoacoes($doador_email);
		if ($obj) {
			return $obj;
			exit;
		} else {
			return false;
		}
	}
}
