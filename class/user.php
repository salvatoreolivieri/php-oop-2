<?php

class User{

  public $name;
  public $surname;
  public $age;

  public $debitCard;
  public $debitCardExpiringDate;
  public $esitoTransazione;

  public function __construct($_name, $_surname, $_age, $_discount = 0, $_debitCard, $_debitCardExpiringDate, $_esitoTransazione)
  {
    $this->name = $_name;
    $this->surname = $_surname;
    $this->age = $_age;

    $this->discount = $_discount;

    $this->debitCard = $_debitCard;
    $this->debitCardExpiringDate = $_debitCardExpiringDate;
    $this->esitoTransazione = $_esitoTransazione;
  }

  public function checkExpirationDate(){
    if ((date("Y-m-d") - $this->debitCardExpiringDate) < 0) {
      $this->esitoTransazione = "carta valida";
    }else{
      $this->esitoTransazione = "carta scaduta";
    }
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
      $this->discount = 20;
    }
  }

}