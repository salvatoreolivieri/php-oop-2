<?php

class User{

  public $name;
  public $surname;
  public $age;

  public function __construct($_name, $_surname, $_age, $_discount = 0)
  {
    $this->name = $_name;
    $this->surname = $_surname;
    $this->age = $_age;
    $this->discount = $_discount;
  }

}

class UserRegistered extends User{
  public $registered;
  public $discount;

  function setRegistered($_registered){
    $this->registered = $_registered;
  }

  function setDiscount(){
    if ($this->registered = true) {
      $this->discount = "20%";
    }
  }

}