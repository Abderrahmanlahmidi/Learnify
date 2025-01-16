<?php

class Tags{

    private int $id = 0;
    private string $tag;

    private PDO $connection;

    public function __construct(PDO $connection)
    {
     $this -> connection = $connection;
    }

    public function getId(){
        $this -> id;
    }


    public function setTag(string $tag){
        $this -> tag = $tag;
    }

    public function getTag(){
        return $this->tag;
    }

    public function __toString()
    {
        return "tag: " . $this -> tag;
    }

    
    public function getAllTags(){
      
        $sql = "SELECT * FROM learnifydb.tags";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if(!empty($row)){
            return $row;
        }

        return [];
    }

    public function createTag(string $tag)
    {
        $sql = "INSERT INTO learnifydb.tags (tag) VALUES (:tag)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':tag', $tag);
        return $stmt->execute();
    }

    public function deleteTag(int $id){
            $sql = "DELETE FROM learnifydb.tags WHERE id = :id";
            $stmt = $this -> connection -> prepare($sql);
            $stmt -> bindParam(':id', $id);
            return $stmt -> execute();
    }

    public function updateTag(int $id, string $tag){
        $sql = "UPDATE learnifydb.tags SET tag = :tag, where id = :id";
        $stmt = $this -> connection -> prepare($sql);
        $stmt->bindParam(':tag', $tag);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
    
    
}


?>