<?php

class User{

  public $name;
  public $surname;
  public $age;
  public $discount;

  public function __construct($_name, $_surname, $_age, $_discount)
  {
    $this->name = $_name;
    $this->surname = $_surname;
    $this->age = $_age;
    $this->discount = $_discount;
  }

}

class UserRegistered extends User{
  public $registered;

  function setDiscount(){
    if ($this->registered != null) {
      $this->discount = "20%";
    }
  }

}