
<?php 

//Criando controller para ver as Doações recebidas
class SeeDoactionController {

	//criando método para a view Ver Doações.
	public static function index(){
		$modelDoacoes = new DoacaoModel();
		$modelDoacoes->getAll($_SESSION['email']);
		include 'Views/SeeDoaction/seeDoaction.php';
	}
}