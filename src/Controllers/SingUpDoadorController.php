



<?php 

class SingUpDoadorController {

	public static function singupDoador(){
		include 'Views/Singup/singupDoador.php';



	}


	public static function save(){
		//Incluindo a Model
		include 'Models/DoadorModel.php';

		//Criando objeto da OngModel
		$model = new DoadorModel();

		//Pegando os dados do formulário.
		$model->cpf = $_POST['cpf'];
		$model->nome = $_POST['nome'];
		$model->email = $_POST['email'];
		$model->senha = $_POST['senha'];
		$model->confirma_senha = $_POST['confirma_senha'];
		//$model->tipo_usuario = $_POST['usuario'];

		$obj = $model->save();

		if($obj){
			header('location: /');
		}elseif($obj != true){
			header('/error');
		}
	}
}