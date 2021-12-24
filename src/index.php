<?php
include('views/layouts/header.php');
require('router.php');
$view = getRoute();
require($view);
include('views/layouts/footer.php');

// class Router{

// 	private $request;

// 	public function __construct($request){
// 		$this->request = $request;
// 	}

// 	public function get($route, $file){

// 		$uri = trim( $this->request, "/" );

// 		$uri = explode("/", $uri);

// 		if($uri[0] == trim($route, "/")){

// 			array_shift($uri);
// 			$args = $uri;
// 		}

// 	}

// }

// $request = $_SERVER['REQUEST_URI'];
// $router = new Router($request);

// $router->get('/', 'header.php');
// $router->get('home', 'home.php');
// $router->get('/', 'footer.php');
