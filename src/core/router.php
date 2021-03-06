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
            // require(HENDLERS . '/create.php');
            $view = 'create';
            break;
        case 'show':
            require(HENDLERS . '/show.php');
            $view = 'show';
            break;
        case 'error':
            $view = 'error';
            break;
        case 'login':
            require(HENDLERS . '/login.php');
            $view = 'login';
            break;
        case 'register':
            require(HENDLERS . '/register.php');
            $view = 'register';
            break;
        case 'logout':
            require(HENDLERS . '/logout.php');
            $view = 'home';
            break;
        default:
            die('<meta http-equiv="refresh" content="0;URL=/error">');
    }
    if (file_exists(VIEW_PAGES_DIR . '/' . $view . '.php')) {
        require VIEW_PAGES_DIR . '/' . $view . '.php';
    } else {
        echo ('<meta http-equiv="refresh" content="0;URL=/error">');
    }
}

// function loadPage()
// {
//     require(getRoute());
// }
