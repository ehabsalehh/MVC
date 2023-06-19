<?php

use App\Controllers\HomeController;

// Define routes
$routes = [
    '/' => [HomeController::class, 'index'],
];

// Process the request
if (isset($_SERVER['REQUEST_URI'])) {
    $path = $_SERVER['REQUEST_URI'];
    if (array_key_exists($path, $routes)) {
        $controller = $routes[$path][0];
        $method = $routes[$path][1];
//        [$controller, $method] = $routes[$path];
        $controllerInstance = new $controller();
        echo call_user_func([$controllerInstance, $method]);
    } else {
        echo '404 Not Found';
    }
}
