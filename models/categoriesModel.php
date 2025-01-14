<?php


class Categories{
    private int $id;
    private string $categories;


    public function __construct(string $categories)
    {
        $this -> categories = $categories;
    }

    public function getId(int $id){
        $this -> id = $id;
    }


    public function setCategories(string $categories){

        $this -> categories = $categories;
        
    }

    public function getCategories(){
        return $this -> categories;
    }


    public function __toString()
    {
        return "categories: " . $this -> categories;
    }



}










?>