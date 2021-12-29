<?php
function getRoute()
{
    $route = trim($_SERVER['REQUEST_URI'], '/');
    switch ($route) {
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
            require(HENDLERS . '/delete.php');
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
