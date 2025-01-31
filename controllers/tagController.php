<?php


require "../config/connection.php";
require "../models/tagsModel.php";

$displayTags = new TagController();

$tags = $displayTags -> getAllTagsController();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $displayTags->deleteTagController($_POST['deleteInfo']);
  header("Refresh:0");
}


// echo "<pre>";
// echo print_r($tags);
// echo "</pre>";


require "../view/dashboard/tagsView.php";

class TagController{

    private $tagModel;

    public function __construct()
    {
        $connection = (new Connection())->getConnection();
        $this -> tagModel = new Tags($connection);
    }

    public function getAllTagsController(){
       
        $tags = $this -> tagModel -> getAllTags();
        return $tags;

    }

    public function createTagController(string $tag){
        $this -> tagModel -> createTag($tag);
      }
  
      public function deleteTagController(int $id){
         $this -> tagModel -> deleteTag($id);
      }
  
      public function updateTagController(int $id, string $tag){
        $this -> tagModel -> updateTag($id, $tag);
      }
      
}




?>