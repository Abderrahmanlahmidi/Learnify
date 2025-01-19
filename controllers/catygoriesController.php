<?php

require "../config/connection.php";
require "../models/catygoriesModel.php";

$displayCatygories = new CatygoriesController();

$catygories = $displayCatygories -> getAllCatygories();

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


}




?>


























