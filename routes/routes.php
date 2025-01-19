<?php

require "../helpers.php";

$routes = [
    "/" => "controllers/coursController.php",
    "/dashboard" => "controllers/userController.php",
    "/dashboard/users" => "controllers/userController.php",
    "/dashboard/roles" => "controllers/roleController.php",
    "/dashboard/courses" => "controllers/coursController.php",
    "/dashboard/tags" => "controllers/tagController.php",
    "/dashboard/catygories" => "controllers/catygoriesController.php",
    "/register" => "controllers/authController.php",
    "/login" => "view/authentication/loginView.php",
    "404" => "/view/error/404.php"
];

$uri = $_SERVER['REQUEST_URI'];

if(array_key_exists($uri, $routes)){
    require(basePath($routes[$uri]));
}else{
    require(basePath($routes['404']));
}
  


?>