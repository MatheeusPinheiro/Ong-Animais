

<?php 

class AdoptionController {
	public static function adoption(){
		include 'Models/LoginModel.php';

		$loginModel = new LoginModel();
		if (isset($_SESSION['email'])) {
			$loginModel = $loginModel->getByLogin($_SESSION['email']);
			
		}
		
		include 'Views/Adoption/adoption.php';
		
	}
}