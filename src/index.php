

<!-- Importações do Controller -->
<?php
include 'Controllers/HomeController.php';
include 'Controllers/AdoptionController.php';
include 'Controllers/SingupController.php';
include 'Controllers/OngController.php';
include 'Controllers/DoadorController.php';
include 'Controllers/LoginController.php';
include 'Controllers/ContactController.php';
include 'Controllers/DoacaoController.php';

// Pegando a url digita.
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


// Usando o switch para redirecionar para as páginas correta.
switch($url){

	case '/':
		HomeController::index();
	break;

	case '/adoption':
		AdoptionController::adoption();
	break;

	case '/contact':
		ContactController::index();
	break;

	case '/singup':
		SingupController::singup();
	break;

	case '/singup/ong':
		OngController::index();
	break;
	
	case '/singup/ong/save':
		OngController::save();
	break;

	case '/singup/doador':
		DoadorController::index();
	break;

	case '/singup/doador/save':
		DoadorController::save();
	break;

	case '/login/validarLogin':
		LoginController::validarLogin();
	break;

	case '/seedoaction':
		DoacaoController::index();
	break;

	case '/doacao/save':
		DoacaoController::save();
	break;

	case '/mydoaction':
		DoacaoController::MyDoaction();
	break;

}