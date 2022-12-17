

<?php 

//Criando o Controller de Adoção Controller
class AdoptionController {
	//Criando o Método para exibir a página Adoção
	public static function adoption(){
		//incluindo LoginModel
		include 'Models/LoginModel.php';

		//incluindo a Model Ong
		include 'Models/OngModel.php';

		//Criando Objeto da LoginModel
		$loginModel = new LoginModel();
		//Verificando se existe uma sessão 
		if (isset($_SESSION['email'])) {
			$loginModel = $loginModel->getByLogin($_SESSION['email']);
			
		}

		
		//Criando Objeto da OngModel
		$modelOng = new OngModel();
		//Utilizando o método para trazer todos os registros do banco
		$modelOng->getRows();
	


		// incluindo a view da Adoção
		include 'Views/Adoption/adoption.php';
		
	}
}