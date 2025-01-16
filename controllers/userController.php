<?php

require "../config/connection.php";
require "../models/userModel.php";

require "../view/partials/header.php";
require "../view/dashboard/tableUsersView.php";
require "../view/partials/footer.php";


class userController{

    private  $userModel;

    public function __construct()
    {
        $connection = (new Connection())->getConnection();
        $this -> userModel = new User($connection);
    }

    public function getAllUsersController(){
      $users = $this -> userModel -> getAllUsers();
      return $users;
    }

    public function createUserController(string $nom, string $email,string $password,int $age){
      $this -> userModel -> createUser($nom, $email, $password, $age);
    }

    public function deleteUserController(int $id){
       $this -> userModel -> deleteUser($id);
    }

    public function updateUserController(int $id, string $nom, string $email, string $age, string $password){
      $this -> userModel -> updateUser($id, $nom, $email, $age, $password);
    }


}


?>