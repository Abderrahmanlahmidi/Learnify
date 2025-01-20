<?php

require "../config/connection.php";
require "../models/catygoriesModel.php";

$displayCatygories = new CatygoriesController();

$catygories = $displayCatygories -> getAllCatygories();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $displayCatygories -> deleteCatygorie($_POST['deleteInfo']);
}

require "../view/dashboard/catygoriesView.php";

class CatygoriesController{

    private $catygoriesModel;

    public function __construct()
    {
        $connection = (new Connection()) -> getConnection();
        $this -> catygoriesModel = new Categories($connection);
    }


    public function getAllCatygories(){
        $categories = $this -> catygoriesModel -> getAllCategories();
        return $categories;
    }

    public function deleteCatygorie($id){
        $this -> catygoriesModel -> deleteCategories($id);
    }


}




?>


























