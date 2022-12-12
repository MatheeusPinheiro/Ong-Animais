<?php

//print_r($_REQUEST);

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
	//acessa o sistema

	include_once('./DAO/OngDao.php');

	$email = $_POST['email'];
	$senha = $_POST['senha'];

	print_r('EMAIL '. $email);
	print_r('SENHA '. $senha);

}else{
	// redireciona para a tela de login de novamente.
	header('location: /singup');
}