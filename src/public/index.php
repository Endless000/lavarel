<?php


ini_set('display_errors', 1);
error_reporting(E_ALL);

use core\Router;

spl_autoload_register(function ($class) {
    $path = str_replace('\\', '/', $class . '.php');
    require_once '../' . $path;
});

session_start();


$route = new Router();
$route->run();
