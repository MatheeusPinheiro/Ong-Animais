
<?php
session_start() or die;

class LoginController
{

	public static function index()
	{
		include 'Models/LoginModel.php';
		include 'Views/Singup/singup.php';
	}


	public static function validarLogin()
	{
		include 'Models/LoginModel.php';

		$modelLogin = new LoginModel();

		if ($_POST['tipo_usuario'] == 2) {

			$validacao = $modelLogin->validarLoginDoador($_POST['email'], $_POST['senha'], $_POST['tipo_usuario']);

			if ($validacao) {
				$_SESSION["email"] = $_POST["email"];
				$_SESSION["tipo_usuario"] = $_POST["tipo_usuario"];
				header("location: /");
			} else {
				header("location: /singup?erro");
			}
		} else if ($_POST['tipo_usuario'] == 1) {
			$validacao = $modelLogin->validarLoginOng($_POST['email'], $_POST['senha'], $_POST['tipo_usuario']);

			if ($validacao) {
				$_SESSION["email"] = $_POST["email"];
				$_SESSION["tipo_usuario"] = $_POST["tipo_usuario"];
				header("location: /");
			} else {
				header("location: /singup?erro");
			}
		} else {
			($_POST['tipo_usuario']) ? 1 : 2;
		}
	}
}
