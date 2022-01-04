<?php
function getRoute()
{
    $route = trim($_SERVER['REQUEST_URI'], '/');
    $routePaths = explode('/', $route);
    $routeView = $routePaths[0] ?? '';
    $id = $routePaths[1] ?? null;

    switch ($routeView) {
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
            var_dump($id, $view);
            $view = 'error';
    }
    if (file_exists(VIEW_PAGES_DIR . '/' . $routeView . '.php')) {
        return VIEW_PAGES_DIR . '/' . $routeView . '.php';
    }
    return VIEW_PAGES_DIR . '/' . $routeView . '.php';
}

function loadPage()
{
    require(getRoute());
}
