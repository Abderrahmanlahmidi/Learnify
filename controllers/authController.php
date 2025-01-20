<?php

require "../config/connection.php";
require "../models/userModel.php";

$uri = $_SERVER['REQUEST_URI'];

if ($uri == '/register') {
    require "../view/authentication/registerView.php";
}else{
    require "../view/authentication/loginView.php";
}



if($_SERVER["REQUEST_METHOD"] == "POST"){

    $nom = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $password = $_POST['password'];  
    $role = $_POST['role'];

   
    if ($role == "Enseignant") {
        $role_id = 3;
    }else if($role == "Etudiant"){
         $role_id = 2;
    }


   $registerAuth = new Authentication();
   $registerAuth -> createUserControllerAuth($nom,$email,$age,$password,$role_id);
   
}


class Authentication{

    private $Auth;

    public function __construct()
    {
        $connection = (new Connection())->getConnection();
        $this -> Auth = new User($connection);
    }

    public function createUserControllerAuth(string $nom, string $email, int $age, string $password, int $role_id){
        $this -> Auth -> createUser($nom, $email, $age, $password,  $role_id);
    }

}



?>


