<?php

require "../view/authentication/registerView.php";
require "../models/userModel.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo $_POST['name'];
    echo $_POST['age'];
    echo $_POST['email'];
    echo $_POST['password'];
}


class Authentication{




}



?>



