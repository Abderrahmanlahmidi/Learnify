<?php


class Role{

    private int $id = 0;
    private string $role = "";

    private PDO $connection;

    public function __construct(PDO $connection)
    {
        $this -> connection = $connection;
    }


    public function setId(int $id):void{
         $this -> id = $id;
    }


    public function setRole(string $role):void{
        $this -> role = $role;
    }
    
    public function getRole(){
        return $this -> role;
    }


    public function __toString()
    {
        return "role: " . $this->role ;
    }


    public function getAllRoles(){
      
        $sql = "SELECT * FROM learnifydb.role";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if(!empty($row)){
            return $row;
        }

        return [];
    }

    public function createRole(string $role)
    {
        $sql = "INSERT INTO learnifydb.role (role) VALUES (:role)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':nom', $role);
        return $stmt->execute();
    }

    public function deleteRole(int $id){
            $sql = "DELETE FROM learnifydb.role WHERE id = :id";
            $stmt = $this -> connection -> prepare($sql);
            $stmt -> bindParam(':id', $id);
            return $stmt -> execute();
    }

    public function updateRole(int $id, string $role){
        $sql = "UPDATE learnifydb.role SET role = :role, where id = :id";
        $stmt = $this -> connection -> prepare($sql);
        $stmt->bindParam(':role', $role);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

}





?>