<?php
function getRoute()
{
    $route = trim($_SERVER['REQUEST_URI'], '/');
    $routePaths = explode('/', $route);
    $view = $routePaths[0] ?? '';
    $id = $routePaths[1] ?? null;
    switch ($view) {
        case '':
        case 'home':
            $view = 'home';
            break;
        case 'create':
            require(HENDLERS . '/create.php');
            $view = 'create';
            break;
        case 'show':
            require(HENDLERS . '/show.php');
            $view = 'show';
            break;
        default:
            $view = 'error';
    }
    if (file_exists(VIEW_PAGES_DIR . '/' . $view . '.php')) {
        return VIEW_PAGES_DIR . '/' . $view . '.php';
    }
    return VIEW_PAGES_DIR . '/' . $view . '.php';
}

function loadPage()
{
    require(getRoute());
}
