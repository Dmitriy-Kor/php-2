<?php

require_once 'Twig/Autoloader.php';
require_once 'classes/Application.php';
require_once 'classes/View.php';

Twig_Autoloader::register();

try {
	// Указывает, где хранятся шаблоны
	$loader = new Twig_Loader_Filesystem('templates');
	
	// Инициализируем Twig
	$twig = new Twig_Environment($loader);
	
	$view = new \Classes\View($twig);
	$app = new \Classes\Application($view);

	$page = $_GET["p"];
	$id = $_GET["id"];
	switch($page) {
		case 1: {
			$app->getGallery();
			break;
		}
		case 2: {
			$app->getPicture($id);
			break;
		}		
	}

} catch (Exception $e) {
	die ('ERROR: ' . $e->getMessage());
}
?>
