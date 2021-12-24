<?php
require_once('constants.php');

function getRoute()
{
    $route = trim($_SERVER['REQUEST_URI'], '/');
    $path = VIEW_DIR;
    switch ($route) {
        case '':
        case 'home':
            $view = 'home';
            break;
        case 'create':
            $view = 'create';
            break;
        case 'formErrors':
            $view = 'formErrors';
            break;
        case 'show':
            $view = 'show';
            break;
        default:
            $view = 'error';
    }
    if (file_exists($path . $view . '.php')) {
        return VIEW_DIR . $view . '.php';
    }
    return VIEW_DIR . $view . '.php';
}
