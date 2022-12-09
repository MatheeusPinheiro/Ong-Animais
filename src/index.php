


<?php

include 'Controllers/HomeController.php';
include 'Controllers/AdoptionController.php';
include 'Controllers/SingupController.php';


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
}