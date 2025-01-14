<?php

require "../config/connection.php";
require "../models/userModel.php";


class userController{

    private  $userModel;

    public function __construct()
    {
        $connection = (new Connection())->getConnection();
        $this -> userModel = new User($connection);
    }

    public function getAllUsers(){
      $users = $this -> userModel -> getAllUsers();
      return $users;
    }


}




?>