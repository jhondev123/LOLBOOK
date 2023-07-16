<?php

require_once  "../vendor/autoload.php";
$routes = require_once __DIR__ . "../../config/routes.php";
use Jhona\LolBook\controllers\HomeController;


$pathInfo=$_SERVER['PATH_INFO'] ?? '/';

$httpMethod =$_SERVER['REQUEST_METHOD'];
$key = "$httpMethod|$pathInfo";
if(array_key_exists($key,$routes)) {

    $controllerClass = $routes["$httpMethod|$pathInfo"];
    $controller = new $controllerClass();
}else{
    echo "Deu erro para chamar a rota";
}
$controller->handle();

