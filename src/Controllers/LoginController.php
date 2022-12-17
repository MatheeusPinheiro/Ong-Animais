
<?php
//Iniciano a sessão
session_start() or die;

//Criando o Controller do Login
class LoginController
{
	//Criando o método para o controle do Login
	public static function index()
	{	//Incluindo a model login e View SingUp
		include 'Models/LoginModel.php';
		include 'Views/Singup/singup.php';
	}

	//Método para validar o Login 
	public static function validarLogin()
	{	
		//Importação da LoginModel
		include 'Models/LoginModel.php';

		//Objeto da LoginModel
		$modelLogin = new LoginModel();

		//Se existe uma sessão e o tipo de usuário for 2, o header vai mudar para o tipo doador
		if ($_POST['tipo_usuario'] == 2) {

			$validacao = $modelLogin->validarLoginDoador($_POST['email'], $_POST['senha'], $_POST['tipo_usuario']);

			if ($validacao) {
				$_SESSION["email"] = $_POST["email"];
				$_SESSION["tipo_usuario"] = $_POST["tipo_usuario"];
				header("location: /");
			} else {
				header("location: /singup?erro");
			}
		} //Se existe uma sessão e o tipo de usuário for 1, o header vai mudar para o tipo ong
		else if ($_POST['tipo_usuario'] == 1) {
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
