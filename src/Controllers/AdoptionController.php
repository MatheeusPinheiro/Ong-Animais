

<?php 

//Criando o Controller de Adoção Controller
class AdoptionController {
	//Criando o Método para exibir a página Adoção
	public static function adoption(){
		//incluindo LoginModel
		include 'Models/LoginModel.php';

		//Criando Objeto da LoginModel
		$loginModel = new LoginModel();
		//Verificando se existe uma sessão 
		if (isset($_SESSION['email'])) {
			$loginModel = $loginModel->getByLogin($_SESSION['email']);
			
		}
		// incluindo a view da Adoção
		include 'Views/Adoption/adoption.php';
		
	}
}