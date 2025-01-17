<?php


require "../config/connection.php";
require "../models/coursModel.php";
require "../view/coursesView.php";


class coursController{

    private $coursModel;


    public function __construct()
    {
        $connection = (new Connection())->getConnection();
        $this -> coursModel = new Cours($connection);
    }


    public function getAllCoursController(){
        $cours = $this -> coursModel -> getAllCours();
        return $cours;
    }


    public function createCoursController(string $titre, string $description, string $contenu, string $categories, string $photo){
        $this -> coursModel -> createCours($titre,  $description,  $contenu,  $categories,  $photo);
    }

    public function deleteCoursController(int $id){
        $this-> coursModel -> deleteCours($id);
    }

    public function updateCoursController(int $id, string $titre, string $description, string $contenu, string $categories, string $photo){
        $this -> coursModel -> updateCours($id, $titre,  $description,  $contenu,  $categories,  $photo);
    }

}



?>