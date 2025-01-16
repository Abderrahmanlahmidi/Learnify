<?php


require "../controllers/roleController.php";

$newRole = new RoleController();

var_dump($newRole -> getAllRoles());


?>