<?php


class User{

    private int $id = 0;
    private string $nom = "";
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
        // $this -> role = new Role();
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
      
        $sql = "SELECT * FROM learnifydb.user INNER JOIN learnifydb.role ON role_id = role.id";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if(!empty($row)){
            return $row;
        }

        return [];
    }

    public function createUser(string $nom, string $email, string $age, string $password)
    {
        $sql = "INSERT INTO learnifydb.user (nom, email, age, password) VALUES (:nom, :email, :age, :password)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':age', $age);
        $stmt->bindParam(':password', $password);

        return $stmt->execute();
    }

    public function deleteUser(int $id){
            $sql = "DELETE FROM learnifydb.user WHERE id = :id";
            $stmt = $this -> connection -> prepare($sql);
            $stmt -> bindParam(':id', $id);
            return $stmt -> execute();
    }

    public function updateUser(int $id, string $nom, string $email, string $age, string $password){
        $sql = "UPDATE learnifydb.user SET nom = :nom, email = :email, age = :age, password = :password where id = :id";
        $stmt = $this -> connection -> prepare($sql);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':age', $age);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

}









?>