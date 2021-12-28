<?php
function getRoute()
{
    $route = trim($_SERVER['REQUEST_URI'], '/');
    $path = VIEW_PAGES_DIR;
    switch ($route) {
        case '':
        case 'home':
            $view = 'home';
            break;
        case 'create':
            include('handlers/create.php');
            $view = 'create';
            break;
        case 'show':
            include_once('handlers/show.php');
            $view = 'show';
            break;
        default:
            $view = 'error';
    }
    if (file_exists($path . $view . '.php')) {
        return VIEW_PAGES_DIR . $view . '.php';
    }
    return VIEW_PAGES_DIR . $view . '.php';
}

function loadPage()
{
    require getRoute();
}
