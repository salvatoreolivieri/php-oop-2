<?php

include_once __DIR__ . "/user.php";

class UserRegistered extends User{
  public $registered;

  public function __construct($_name, $_surname, $_age, $_debitCard, $_debitCardExpiringDate)
  {
    parent::__construct($_name, $_surname, $_age, $_debitCard, $_debitCardExpiringDate);

    $this->discount = 20;
  }

  // function setRegistered($_registered){
  //   $this->registered = $_registered;
  // }

  // function setDiscount(){
  //   if ($this->registered = true) {
  //     $this->discount = 20;
  //   }
  // }

}