<?php


require_once "../config/connection.php";

class User{

    private int $id = 0;
    private string $nom = "";
    private string $prenom = "";
    private string $email = ""; 
    private string $password = "";
    private int $age = 0;
    private Role $role;

    private Connection $connection;

    public function __construct(string $nom, string $prenom, string $email, string $password)
    {

        $this -> nom = $nom;
        $this -> prenom = $prenom;
        $this -> email = $email;
        $this -> password = $password;
        $this -> role = new Role("admin");

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

    public function setConnection(string $connection){
         $this -> connection = $connection;
    }

    public function getConnection(){
        return $this -> connection;
    }

    public function Register(){

    }

    public function Login(){
        
    }


    public function __toString()
    {
        return "nom: " . $this -> nom . "prenom: " . $this -> prenom . "email: " . $this -> email . "password: " . $this -> password . "role: " . $this -> role;
    }

    
    
}









?>