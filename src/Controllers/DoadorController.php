



<?php 

class DoadorController {

	public static function index(){
		
		//Incluindo a Model
		include 'Models/DoadorModel.php';

		//Criando objeto da OngModel
		$model = new DoadorModel();
		$model->getAllRows();


		//importando a view 
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
		$model->tipo_usuario = $_POST['tipo_usuario'];

		$obj = $model->save();

		if($obj){
			header('location: /singup/doador?message=success-create');
		}elseif($obj != true){
			header('/error');
		}
	}
}