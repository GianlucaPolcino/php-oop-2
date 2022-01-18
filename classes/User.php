<?php
class User{
    private $name;
    private $surname;
    private $email;
    private $password;
    private $address;
    private $phone;
    private $credit_card;
    protected $discount;

    public function __construct($_email, $_password)
    {
        $this->email = $_email;
        $this->password = $_password;
    }

    // SETTER

    public function setName($_name){
        $this->name = $_name;
    }

    public function setSurname($_surname){
        $this->surname = $_surname;
    }

    public function setCreditCard($_credit_card){
        $this->credit_card = $_credit_card;
    }

    // GETTER

    public function getName(){
        return $this->name;
    }

    public function getSurname(){
        return $this->surname;
    }

    public function getCreditCard(){
        return $this->credit_card;
    }



}
?>