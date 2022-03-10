<?php

require_once __DIR__ . '/../vendor/autoload.php';

// Debogger
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();


// TODO organiser la partie configuration
$config = parse_ini_file(__DIR__ . "/../config.ini");
define('BASE_URI', $config['base_uri']);



// Router
use App\core\Router;

$router = new Router();
/************ Routes *************/
$router->register('/', '\App\controller\DefaultController::accueil');
$router->register('/contact', '\App\controller\DefaultController::contact');
$router->register('/about', '\App\controller\DefaultController::about');
$router->register('/form', '\App\controller\DefaultController::form');
$router->register('/login', '\App\controller\DefaultController::login');
$router->register('/dashboard', '\App\controller\DefaultController::dashboard');
$router->register('/news', '\App\controller\DefaultController::news');
$router->register('/connexion', '\App\controller\DefaultController::connexion');

/************ /Routes *************/
$router->run();


