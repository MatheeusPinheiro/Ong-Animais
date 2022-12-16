

<?php 


class DoadorModel {

	public $rows;

	//Método salvar
	public function save(){
		include 'DAO/DoadorDao.php';

		$dao = new DoadorDao();

		if($dao->insert($this)=== false){
			return false;
		}else{
			return true;
		}
	}


	//Pegando as linhas da tabela doador
	public function getAllRows() {
		include 'DAO/DoadorDao.php';

		$dao = new DoadorDao();

		$this->rows = $dao->select();
	}
}