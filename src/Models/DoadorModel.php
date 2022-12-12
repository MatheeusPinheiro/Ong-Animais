

<?php 


class DoadorModel {


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
}