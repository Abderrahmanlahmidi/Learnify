<?php



class Categories{
    private int $id = 0;
    private string $categories = "";

    private PDO $connection;

    public function __construct(PDO $connection)
    {
        $this -> connection = $connection;        
    }

    public function getId(int $id){
        $this -> id = $id;
    }


    public function setCategories(string $categories){

        $this -> categories = $categories;
        
    }

    public function getCategories(){
        return $this -> categories;
    }


    public function __toString()
    {
        return "categories: " . $this -> categories;
    }

    public function getAllCategories(){
        $sql = "SELECT * FROM learnifydb.catygories";

        $stmt = $this -> connection -> prepare($sql);
        $stmt -> execute();

        $row = $stmt -> fetchAll(PDO::FETCH_ASSOC);

        if(!empty($row)){
            return $row;
        }

        return [];

        
    }



}










?>