
<?php
class DoacaoController
{

	public static function index()
	{

		//Incluindo a Model
		include 'Models/DoacaoModel.php';

		//Criando objeto da OngModel
		$modelDoacoes = new DoacaoModel();
		if (isset($_GET['data'])) {
			$modelDoacoes->getAllRows($_SESSION['email'], $_GET['data']);
			include 'Views/SeeDoaction/seeDoaction.php';
		} else {
			$modelDoacoes->getAll($_SESSION['email']);
			include 'Views/SeeDoaction/seeDoaction.php';
		}
		//importando a view 

	}


	public static function save()
	{
		//Incluindo a Model
		include 'Models/DoacaoModel.php';

		//Criando objeto da OngModel
		$model = new DoacaoModel();

		//Pegando os dados do formulário.
		date_default_timezone_set("America/Manaus");

		$model->data_doacao = date("y-m-d H:i:s");
		$model->doador_id = $_POST['doador_id'];
		$model->ong_id = $_POST['ong_id'];
		$model->descricao = $_POST['descricao'];

		$obj = $model->save();

		if ($obj) {
			header('location: /?message=success-create');
		} elseif ($obj != true) {
			header('/error');
		}
	}
}
