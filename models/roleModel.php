<?php


class Role{

    private int $id = 0;
    private string $role = "";

    public function __construct()
    {
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
}





?>