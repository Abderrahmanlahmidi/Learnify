<?php


class Connection{

    private string $host = "localhost";
    private string $dbname = "LearnifyDB";
    private string $username = "root";
    private string $password = "123123321321@instance";

    private PDO $connection;

    public function __construct()
    {
        $dsn = "mysql:host=$this->host;dbname:$this->dbname";
        $this->connection = new PDO($dsn, $this->username, $this->password);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
    }

    public function getConnection(){

        if ($this -> connection) {
           echo "db its connection";
        }else{
           echo "error db its not connection"; 
        }
        return $this->connection;
    }


}







?>