<?php

require "../helpers.php";

$routes = [
    "/" => "controllers/coursController.php",
    "/dashboard/users" => "controllers/userController.php",
    "/dashboard/roles" => "controllers/roleController.php",
    "/register" => "controllers/authController.php"
    
];

$uri = $_SERVER['REQUEST_URI'];

if(array_key_exists($uri, $routes)){
    require(basePath($routes[$uri]));
}
    


?>