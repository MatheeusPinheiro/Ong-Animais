
<?php
//Criando o Controller da Doação
class DoacaoController
{
	//Método para exibir a pagina Doação 
	public static function index()
	{

		//Incluindo a Model
		include 'Models/DoacaoModel.php';

		//Criando objeto da OngModel
		$modelDoacoes = new DoacaoModel();

		//Verificando se existe na url um endpoint 'data'
		if (isset($_GET['data'])) {
			$modelDoacoes->getAllRows($_SESSION['email'], $_GET['data']);
			include 'Views/SeeDoaction/seeDoaction.php';
		} else if (isset($_GET['email'])) {
			$modelDoacoes->getAll($_SESSION['email']);
			include 'Views/SeeDoaction/seeDoaction.php';
		} else {
			header('location: /');
		}
	}

	//Método para exibir a página Minha Doação.
	public static function MyDoaction()
	{
		//Incluindo a Model
		include 'Models/DoacaoModel.php';
		include 'Models/OngModel.php';
		include 'Models/LoginModel.php';

		if (isset($_SESSION['email'])) {
			//Criando Objeto da OngModel
			$modelOng = new OngModel();

			//Utilizando o método para trazer todos os registros do banco
			$modelOng->getRows();

			//Criando objeto da OngModel
			$modelDoacoes = new DoacaoModel();
			$modelDoacoes->getAllDoacoes($_SESSION['email']);

			$loginModel = new LoginModel();
			//Verificando se existe sessão.
			if (isset($_SESSION['email'])) {
				$loginModel = $loginModel->getByLogin($_SESSION['email']);
			}

			include 'Views/MyDoaction/myDoaction.php';
			include 'Components/modal.php';
		} else {
			header('location: /');
		}
	}

	//Método para salvar a Doação
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

		//Verificando se o objeto retorna true
		if ($obj) {
			// Se for verdadeiro será redirecionado para uma mensagem de sucesso.
			header('location: /?message=success-create');
		} elseif ($obj != true) {
			//Se não for verdadeiro será redirecionado para uma mensagem de erro.
			header('location: /?message=error-create');
		}
	}
}
