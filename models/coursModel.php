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

    public function __construct(string $titre, string $description, string $contenu, string $categories, string $photo, array $tags)
    {
        
        $this -> titre = $titre;
        $this -> description = $description;
        $this -> contenu = $contenu;
        $this -> $categories = $categories;
        $this -> photo = $photo;
        $this -> prof = new User("jahn", "Doe", "jahn@gmail.com", 2134);
        $this -> tags = $tags;
        
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

    public function __toString(){
        return "titre: " . $this -> titre . "description: " . $this -> description . "contenu: " . $this -> contenu . "categories: " . $this -> categories . "prof: " . $this -> prof -> getNom() . $this -> prof -> getPrenom() . $this -> prof ->  getEmail() . $this -> prof ->  getPassword();
    }



}









?>