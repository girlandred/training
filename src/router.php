<?php

function getRoute()
{
    $route = trim($_SERVER['REQUEST_URI'], '/');
    $path = $_SERVER['DOCUMENT_ROOT'] . '/views/pages/';
    switch ($route) {
        case '':
        case 'home':
            $view = 'home';
            break;
        case 'create':
            $view = 'create';
            break;
        case 'show':
            $view = 'show';
            break;
        default:
            $view = 'error';
    }
    if (file_exists($path . $view . '.php')) {
        return $path . $view . '.php';
    }
    return $path . $view . '.php';
}
