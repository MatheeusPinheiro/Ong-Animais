



<?php 
// Criando o controller da Ong
class OngController {
	//Criando o método para exibir a view da Ong
	public static function index(){
		
		include 'Views/Singup/singupOng.php';
	}

	//Criando o método para salvar a Ong
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
		$model->tipo_usuario = $_POST['tipo_usuario'];

		$obj = $model->save();

		if($obj){
			header('location: /singup/ong?message=success-create');
		}else{
			header('location: /singup/ong?message=error-create');
		}
	}
}