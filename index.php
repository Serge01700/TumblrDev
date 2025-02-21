<?php

session_start();    // On démarre la session

require_once('./vendor/autoload.php');
require_once('./vendor/altorouter/altorouter/AltoRouter.php');

$router = new AltoRouter();
$router->setBasePath('/tumblrdev');

// Le nom du controller # la méthode à appeler = 'ControllerVille#home'
$router->map('GET', '/', 'ControllerPublication#home', 'home');

$router->map('GET|POST', '/form-signup', 'ControllerUser#signup', 'form-signup');

$router->map('GET|POST', '/form-signin', 'ControllerUser#login', 'form-signin');

$router->map('GET', '/logout', 'ControllerUser#logout', 'logout');



$match = $router->match();

// var_dump($router);

if(is_array($match)){
    list($controller, $action) = explode('#', $match['target']);
    $obj = new $controller();

    if(is_callable(array($obj, $action))){
        call_user_func_array(array($obj, $action), $match['params']);
    }
}