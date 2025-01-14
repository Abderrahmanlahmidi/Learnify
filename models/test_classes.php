<?php 

require_once "roleModel.php";
require_once "userModel.php";
require_once "tagsModel.php";
require_once "categoriesModel.php";
require_once "coursModel.php";


class Test {
    public function __construct() {
       
    }
    
    public function testRole(){
        $role = new Role("admin");
        
        $this->display($role);
    }

    public function testUser(){
        $user = new User("John", "Doe", "John@gmail.com", "1234");

        $this -> display($user);
    }

    public function testTag(){
        $tag = new Tags("philosophy");
        $this -> display($tag);
    }

    public function testCategories(){
        $categories = new Categories("testCategories");
        $this -> display($categories);
    }

    public function testCours(){
        $cours  = new Cours("Laravel", "Cours Laravel", "Laravel contenu", "Laravel categories","Laravel.png", ["cours1", "cours2"]);
        $this -> display($cours);
    }




    public function display($obj) {
        echo $obj;
        echo "<br />";
        echo "===================================================================================";
        echo "<br />";
    }

}