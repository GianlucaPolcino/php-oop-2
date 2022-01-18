<?php
require_once __DIR__ . "/Product.php";

// Creo la classe figlia di Product

class Collection extends Product{
    private $collection;
    
    function __construct($_name, $_price, $_collection)
    {
        parent::__construct($_name, $_price);
        $this->collection = $_collection;
    }


    // SETTER

    public function setCollection($_collection){
        $this->collection = $_collection;
    }

    // GETTER

    public function getCollection(){
        return $this->collection;
    }

}

?>