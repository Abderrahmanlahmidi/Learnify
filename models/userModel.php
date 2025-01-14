<?php


class User{

    private int $id = 0;
    private string $nom = "";
    private string $prenom = "";
    private string $email = ""; 
    private string $password = "";
    private int $age = 0;
    private Role $role;

    private PDO $connection;

    public function __construct(PDO $connection)
    {
        $this -> connection = $connection;
    }



    public function setRole(){
        $this -> role = new Role();
    }

    public function getRole(){
        return $this -> role;
    }

    public function setId(int $id):void{
        $this -> id = $id;
    }

    public function setNom($nom):void{
        $this -> nom = $nom;
    }

    public function getNom(){
        return $this -> nom;
    }

    public function setPrenom(string $prenom):void{
        $this -> prenom = $prenom;
    }

    public function getPrenom(){
        return $this -> prenom;
    }

    public function setEmail(string $email):void{
        $this -> email = $email;
    }

    public function getEmail(){
        return $this -> email;
    }

    public function setPassword(string $password):void{
        $this -> password = $password;
    }

    public function getPassword(){
        return $this -> password;
    }

    public function setAge(int $age):void{
        $this -> age = $age;
    }

    public function getAge(){
        return $this -> age;
    }

    public function getConnection(){
        return $this -> connection;
    }


    public function getAllUsers(){
      
        $sql = "SELECT * FROM learnifydb.user";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if(!empty($row)){
            return $row;
        }

        return [];
    }



    public function __toString()
    {
        return "nom: " . $this -> nom . "prenom: " . $this -> prenom . "email: " . $this -> email . "password: " . $this -> password . "role: " . $this -> role;
    }

    
    
}









?>