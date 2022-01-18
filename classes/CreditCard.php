<?php
require_once __DIR__ . "/User.php";

class CreditCard{
    private $number;
    private $cvc;
    private $name;
    private $surname;
    private $expire;
    public $warning = "CARTA SCADUTA";

    public function __construct($_number, $_cvc)
    {
        $this->number = $_number;
        $this->cvc = $_cvc;
    }

    // SETTER

    public function setNumber($_number){
        $this->number = $_number;
    }

    public function setCvc($_cvc){
        $this->cvc = $_cvc;
    }

    public function setName($_name){
        $this->name = $_name;
    }

    public function setExpire($_expire){
        if($_expire < date("Y")){
            return $this->warning;;
        }else {
            $this->expire = $_expire;
        }
    }

    // GETTER

    public function getNumber(){
        return $this->number;
    }

    public function getCvc(){
        return $this->cvc;
    }

    public function getName(){
        return $this->name;
    }

    public function getExpire(){
        return $this->expire;
    }
}
?>