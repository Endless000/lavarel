<?php


namespace core;
class View
{
    public $path;
    public $route;
    public $layout = 'default';

    public function __construct($route)
    {
        $this->route = $route;
        $this->path = $route['controller'] . '/' . $route['action'];
    }

    public function render($title, $vars = [])
    {
        extract($vars);
        $path = '../views/' . $this->path . '.phtml';
        if (file_exists($path)) {
            ob_start();
            require $path;
            $content = ob_get_clean();
            require '../views/layout/' . $this->layout . '.phtml';
        }
    }

    public static function errorCode($code)
    {
        http_response_code($code);
        $path = '../views/errors/' . $code . '.php';
        if (file_exists($path)) {
            require $path;
        }
        exit;
    }

    public function redirect($url)
    {
        header('Location:' . $url);
        exit;
    }
}