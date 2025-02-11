<?php

require_once('./vendor/autoload.php');
require_once('./vendor/altorouter/altorouter/AltoRouter.php');

$router = new AltoRouter();
$router->setBasePath('/TumblrDev');

// Le nom du controller # la méthode à appeler = 'ControllerVille#home'
$router->map('GET', '/', 'ControllerPublication#home', 'home');

$match = $router->match();

// var_dump($match);

if(is_array($match)){
    list($controller, $action) = explode('#', $match['target']);
    $obj = new $controller();

    if(is_callable(array($obj, $action))){
        call_user_func_array(array($obj, $action), $match['params']);
    }
}