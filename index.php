<?php
require 'application/lib/Dev.php';
require 'application/core/Router.php';
use Application\Core\Router;


spl_autoload_register(function ($class) {           //автоподключение(загрузка) файлов
    $path = str_replace('\\','/', $class.'.php');
        if(file_exists($path)){
            require $path;
        }
});

session_start();

$router = new Router;
$router->run();


