<?php

// function getRoute() {
//     return trim($_SERVER['REQUEST_URI'], '/');
// }

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


// $route = trim($_SERVER['REQUEST_URI'], '/');

// switch ($route) {

//     case '':
//         require '/views/pages/' . $route . '.php';
//     case '/':
//         require  . '/views/index.php';
//         break;

//     case '/courses':
//         require __DIR__ . '/views/courses.php';
//         break;

//     case '/views/authors':
//         require __DIR__ . '/views/authors.php';
//         break;

//     case '/about':
//         require __DIR__ . '/views/aboutus.php';
//         break;

//     default:
//         http_response_code(404);
//         require __DIR__ . '/views/404.php';
//         break;
// }