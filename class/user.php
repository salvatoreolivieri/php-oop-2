<?php

require_once __DIR__ . "/product.php";
require_once __DIR__ . "/userRegistered.php";

class User{

  public $name;
  public $surname;
  public $age;

  public $cart;
  public $discount = 0;

  public $debitCard;
  public $debitCardExpiringDate;
  public $esitoTransazione;

  public function __construct($_name, $_surname, $_age, $_debitCard, $_debitCardExpiringDate)
  {
    $this->name = $_name;
    $this->surname = $_surname;
    $this->age = $_age;

    $this->debitCard = $_debitCard;
    $this->debitCardExpiringDate = $_debitCardExpiringDate;
  }

  public function checkExpirationDate(){
    if ((date("Y-m-d") - $this->debitCardExpiringDate) < 0) {
      $this->esitoTransazione = "carta valida";
    }else{
      $this->esitoTransazione = "carta scaduta";
    }
  }

  public function priceToPay(){

    $somma = 0;

    foreach ($this->cart as $prodotto ) {
      $somma += $prodotto->price;
    }

    return $this->cart = $somma * (1- ($this->discount / 100));

  }

}