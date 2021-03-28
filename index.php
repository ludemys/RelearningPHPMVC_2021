<?php

require_once './Libraries/ChromeLogger.php';

require_once './autoload_controllers.php';

if (isset($_GET['controller'])) {
    $controllerName = $_GET['controller'] . 'Controller';
} else {
    error('404');
}

if (class_exists($_GET['controller'] . 'controller')) {
    $controller = new $controllerName();

    if (isset($_GET['action']) && method_exists($controller, $_GET['action'])) {

        $action = $_GET['action'];

        $controller->$action();
    } else {
        error('404');
    }
} else {
    error('404');
}

ChromePhp::log($controller);

function error($error)
{
    $controller = new ErrorController($error);

    $controller->error_exit();
}
