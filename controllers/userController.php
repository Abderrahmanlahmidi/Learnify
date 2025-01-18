<?php

require "../config/connection.php";
require "../models/userModel.php";

$userAllData = new userController();
$users = $userAllData -> getAllUsersController();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userAllData -> deleteUserController($_POST['deleteInfo']);
    header("Refresh:0");
}





require "../view/dashboard/tableUsersView.php";

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