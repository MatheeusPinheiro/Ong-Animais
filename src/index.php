


<?php

include 'Controllers/HomeController.php';
include 'Controllers/AdoptionController.php';
include 'Controllers/SingupController.php';
include 'Controllers/SingUpOngController.php';
include 'Controllers/SingUpDoadorController.php';


$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


switch($url){

	case '/':
		HomeController::index();
	break;

	case '/adoption':
		AdoptionController::adoption();
	break;

	case '/singup':
		SingupController::singup();
	break;

	case '/singup/ong':
		SingUpOngController::singupOng();
	break;
	
	case '/singup/ong/save':
		SingUpOngController::save();
	break;

	case '/singup/doador':
		SingUpDoadorController::singupDoador();
	break;
	
	
}