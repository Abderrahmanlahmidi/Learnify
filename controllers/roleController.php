<?php

require "../config/connection.php";
require "../models/roleModel.php";


$displayRoles = new RoleController();

$roles = $displayRoles->getAllRoles();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $displayRoles->deleteRoleController($_POST['deleteInfo']);
  header("Refresh:0");
}


// echo "<pre>";
// echo print_r($roles);
// echo "</pre>";

require "../view/dashboard/roleView.php";


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