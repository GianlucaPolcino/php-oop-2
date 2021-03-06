<?php

// Creo la classe Product

class Product{
    private $id;
    private $name;
    private $price;
    private $type;
    private $description;
    protected $discount;

    // Creo il construct di Product

    public function __construct($_id, $_name, $_price)
    {
        $this->id = $_id;
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

    public function setDescription($_description){
        $this->description = $_description;
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

    public function getDescription(){
        return $this->description;
    }

    public function getFinalPrice(){
        $final_price = $this->price - (($this->price * $this->discount) / 100);
        return number_format($final_price, 2, ",", "");
    }
}
?>