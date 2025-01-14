<?php

class Tags{

    private int $id = 0;
    private string $tag;

    public function __construct(string $tag)
    {
        $this -> tag = $tag;
    }

    public function getId(){
        $this -> id;
    }


    public function setTag(string $tag){
        $this -> tag = $tag;
    }

    public function getTag(){
        return $this->tag;
    }

    public function __toString()
    {
        return "tag: " . $this -> tag;
    }


    
}






?>