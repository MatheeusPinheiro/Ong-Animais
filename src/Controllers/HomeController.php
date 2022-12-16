<?php 

class HomeController {

	public static function index(){
		include 'Models/OngModel.php';
		include 'Models/LoginModel.php';

		$modelOng = new OngModel();
		$modelOng->getRows();
	
		
		$loginModel = new LoginModel();
		if (isset($_SESSION['email'])) {
			$loginModel = $loginModel->getByLogin($_SESSION['email']);
			
		}
		
		include 'Views/Home/home.php';
		include 'Components/modal.php';

	}
}