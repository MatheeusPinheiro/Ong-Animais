



<?php 

class SingUpDoadorController {

	public static function singupDoador(){
		include 'Views/Singup/singupDoador.php';



	}


	public static function save(){
		//Incluindo a Model
		include 'Models/OngModel.php';

		//Criando objeto da OngModel
		$model = new OngModel();

		//Pegando os dados do formulário.
		$model->cnpj = $_POST['cnpj'];
		$model->nome = $_POST['nome'];
		$model->email = $_POST['email'];
		$model->senha = $_POST['senha'];
		$model->confirma_senha = $_POST['confirma_senha'];

		$obj = $model->save();

		if($obj){
			header('location: /');
		}elseif($obj != true){
			header('/error');
		}
	}
}