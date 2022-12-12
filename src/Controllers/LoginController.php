
<?php

class LoginController {

	public static function index(){
		include 'Models/LoginModel.php';
		include 'Views/Singup/singup.php';
	}


	public static function validarLogin(){
		include 'Models/LoginModel.php';

		$modelLogin = new LoginModel();

		$validacao = $modelLogin->validarLogin($_POST['email'], $_POST['senha']);

		if($validacao){
			session_start() or die;

			$_SESSION['email'] = $_POST['email'];
			$_SESSION['senha'] = $_POST['senha'];

			header('location: /');
		} else {
            header("location: /singup?erro");
        }
	}

}