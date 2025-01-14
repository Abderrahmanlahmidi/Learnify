<?php


class Cours{
  
    private int $id = 0;
    private string $titre = "";
    private string $description = "";
    private string $contenu = "";
    private string $categories = "";
    private array $tags = [];
    private User $prof;
    private string $photo = "";

    public function __construct()
    {
        
    }


    public function getId(){
        return $this -> id;
    }

    public function setTitre(string $titre){
        $this -> titre = $titre;
    }

    public function getTitre(){
        return $this -> titre;
    }

    public function setDescription(string $description){
        $this -> description = $description;
    }

    public function getDescription(){
        return $this -> description;
    }

    public function setContenu(string $contenu){
        $this -> contenu = $contenu;
    }

    public function getContenu(){
        return $this -> contenu;
    }

    public function setCategories(string $categories){
        $this -> categories = $categories;
    }

    public function getCategories(){
        return $this -> categories;
    }

    public function setTags(array $tags){
        $this -> tags = $tags;
    }

    public function getTags(){
        return $this->tags;
    }

    public function setProf(User $prof){
        $this -> prof = $prof;
    }

    public function getProf(){
        return $this -> prof;
    }

    public function setPhoto(string $photo){
        $this -> photo = $photo;
    }

    public function getPhoto(){
        return $this->photo;
    }





}









?>