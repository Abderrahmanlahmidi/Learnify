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

    private PDO $connection;

    public function __construct(PDO $connection)
    {
        $this -> connection = $connection;
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


    public function getAllCours(){
      
        $sql = "SELECT * FROM learnifydb.cours";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if(!empty($row)){
            return $row;
        }

        return [];
    }

    public function createCours(string $titre, string $description, string $contenu, string $categories, string $photo)
    {
        $sql = "INSERT INTO learnifydb.user (titre ,description ,contenu ,categories ,photo) VALUES (:titre ,:description ,:contenu ,:categories ,:photo)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':titre', $titre);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':contenu', $contenu);
        $stmt->bindParam(':categories', $categories);
        $stmt->bindParam(':photo', $photo);


        return $stmt->execute();
    }

    public function deleteCours(int $id){
            $sql = "DELETE FROM learnifydb.cours WHERE id = :id";
            $stmt = $this -> connection -> prepare($sql);
            $stmt -> bindParam(':id', $id);
            return $stmt -> execute();
    }

    public function updateCours(int $id,string $titre, string $description, string $contenu, string $categories, string $photo){
        $sql = "UPDATE learnifydb.cours SET titre = :titre, description = :description, contenu = :contenu, categories = :categories, photo = :photo where id = :id";
        $stmt = $this -> connection -> prepare($sql);
        $stmt->bindParam(':titre', $titre);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':contenu', $contenu);
        $stmt->bindParam(':categories', $categories);
        $stmt->bindParam(':photo', $photo);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }





    




}



require "../view/coursesView.php";





?>