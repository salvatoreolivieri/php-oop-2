<?php

include_once __DIR__ . "/class/product.php";
include_once __DIR__ . "/class/user.php";
include_once __DIR__ . "/class/userRegistered.php";


$croccantini = new Products('croccantini', 'food', 8);
var_dump($croccantini);

$osso = new Products('osso', 'game', 4);
$cuccia = new Products('cuccia', 'commodity', 15);

$products_db = [$croccantini, $osso, $cuccia];
var_dump($products_db);


$giacomo = new User('Giacomo', 'Leopardi', 28, "mastercard", "2020-06-19", '');
$giacomo->checkExpirationDate();
$giacomo->priceToPay();
var_dump($giacomo->cart);


$Napoleone = new UserRegistered('Napoleone','Bonaparte', 31,"visa", "2023-06-21");
// $Napoleone->setDiscount(true);
// $Napoleone->checkExpirationDate();

var_dump($Napoleone);
var_dump($Napoleone->cart);




?>