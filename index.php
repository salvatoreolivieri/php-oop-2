<?php

include_once __DIR__ . "/class/product.php";
include_once __DIR__ . "/class/user.php";


$croccantini = new Products('croccantini', 'food', 8);
var_dump($croccantini);

$osso = new Products('osso', 'game', 4);
$cuccia = new Products('cuccia', 'commodity', 15);


$giacomodo = new User('Giacomo', 'Leopardi', 28, 0, "mastercard", "2020-06-19", '');
$giacomodo->checkExpirationDate();
var_dump($giacomodo);



$Napoleone = new UserRegistered('Napoleone','Bonaparte', 31, 0,"visa", "2023-06-21", '');
$Napoleone->setDiscount(true);
$Napoleone->checkExpirationDate();

var_dump($Napoleone);



?>