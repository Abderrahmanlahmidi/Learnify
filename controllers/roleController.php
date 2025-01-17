<?php

require "../config/connection.php";
require "../models/roleModel.php";
require "../view/rolesView.php";


class RoleController{

    private $roleModel;

    public function __construct()
    {
        $connection = (new Connection())->getConnection();
        $this -> roleModel = new Role($connection);
    }

    public function getAllRoles(){
       
            $roles = $this -> roleModel -> getAllRoles();
            return $roles;

    }

    public function createUserController(string $role){
        $this -> roleModel -> createRole($role);
      }
  
      public function deleteRoleController(int $id){
         $this -> roleModel -> deleteRole($id);
      }
  
      public function updateRoleController(int $id, string $role){
        $this -> roleModel -> updateRole($id, $role);
      }

}




?>