

<?php 


class OngModel {


	//Método salvar
	public function save(){
		include 'DAO/OngDao.php';

		$dao = new OngDao();

		if($dao->insert($this)=== false){
			return false;
		}else{
			return true;
		}
	}

	//Linhas do banco de dados.
	public function getRows(){
		include 'DAO/OngDao.php';
		

        $dao = new OngDao();
        $this->rows = $dao->getAllOngs();
	}
}