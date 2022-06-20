<?php

class Products{

  public $name;
  public $category;
  public $price;

  public function __construct($_name, $_category, $_price)
  {
    $this->name = $_name;
    $this->category = $_category;
    $this->price = $_price;
  }

}

