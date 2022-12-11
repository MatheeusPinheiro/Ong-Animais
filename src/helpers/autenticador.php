<?php

session_start();


try {
	$usuario_certo = 'Matheus';
	$senha_certa = '1234';


	$usuario_digitado = $_POST[''];
	$senha_digitada = $_POST[''];

	if($usuario_certo === $usuario_digitado){
		if($senha_certa === $senha_digitada){

			$_SESSION['usuario_logado'] = $usuario_digitado;
			header('location: /');
		}else{
			header('location: /singup');
		}
	}
} catch (\Throwable $th) {
	echo 'Error'.$th;
}