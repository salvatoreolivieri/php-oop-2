<?php

include_once __DIR__ . "/class/product.php";
include_once __DIR__ . "/class/user.php";


$croccantini = new Products('croccantini', 'food', 8);
var_dump($croccantini);

$osso = new Products('osso', 'game', 4);
$cuccia = new Products('cuccia', 'commodity', 15);


$giacomodo = new User('Giacomo', 'Leopardi', 28, 0);
var_dump($giacomodo);


$Napoleone = new UserRegistered('Napoleone','Bonaparte', 31, 0);
$Napoleone->setDiscount(true);

var_dump($Napoleone)


?>