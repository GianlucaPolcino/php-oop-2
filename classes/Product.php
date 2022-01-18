<?php

// Creo la classe Product

class Product{
    private $name;
    private $price;
    private $type;
    private $description;
    protected $discount = 0;

    // Creo il construct di Product

    public function __construct($_name, $_price)
    {
        $this->name = $_name;
        $this->price = $_price; 
    }

    // Creo i SETTER

    public function setName($_name){
        $this->name = $_name;
    }

    public function setType($_type){
        $this->type = $_type;
    }

    public function setPrice($_price){
        $this->price = $_price;
    }

    // Creo i GETTER

    public function getName(){
        return $this->name;
    }

    public function getType(){
        return $this->type;
    }

    public function getPrice(){
        return $this->price;
    }

    
}
?>