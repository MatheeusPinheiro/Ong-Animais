<?php 


class ContactController {

	public static function index(){

		include 'Models/LoginModel.php';

		$loginModel = new LoginModel();
		if (isset($_SESSION['email'])) {
			$loginModel = $loginModel->getByLogin($_SESSION['email']);
			
		}

		include 'Views/Contact/contact.php';
	}
}