<?php


//Criando o Controller de Contato Controller
class ContactController
{
	//Criando o Método para exibir a pagina Contato
	public static function index()
	{

		//incluindo LoginModel
		include 'Models/LoginModel.php';

		//incluindo a Model Ong
		include 'Models/OngModel.php';

		//Criando Objeto da OngModel
		$modelOng = new OngModel();
		//Utilizando o método para trazer todos os registros do banco
		$modelOng->getRows();

		//Criando Objeto da LoginModel
		$loginModel = new LoginModel();

		//Verificando se existe uma sessão 
		if (isset($_SESSION['email'])) {
			$loginModel = $loginModel->getByLogin($_SESSION['email']);
		}

		// incluindo a view da Adoção
		include 'Views/Contact/contact.php';
	}
}
