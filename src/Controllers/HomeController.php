<?php 

//Criando o controller da página Home
class HomeController {
	//Criando o Método para exibir a pagina Home.
	public static function index(){
		//Incluindo as Models para criar Objetos
		include 'Models/LoginModel.php';
		include 'Models/OngModel.php';

		//Criando Objeto da OngModel
		$modelOng = new OngModel();
		//Utilizando o método para trazer todos os registros do banco
		$modelOng->getRows();
	
		//criando Objeto da LoginModel
		$loginModel = new LoginModel();
		
		//Verificando se existe sessão.
		if (isset($_SESSION['email'])) {
			$loginModel = $loginModel->getByLogin($_SESSION['email']);
		}
		
		include 'Views/Home/home.php';
		include 'Components/modal.php';

	}
}