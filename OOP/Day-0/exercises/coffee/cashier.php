<?php
require_once 'CoffeeCup.php';
// $myCoffee = new CoffeeCup(30, 'Malongo', 65);
// echo $myCoffee;
// echo $myCoffee->sip(10) . '<br>';
// echo $myCoffee->refill() . '<br>';
$myCoffee = new CoffeeCup(300, 'Moka', 75);
echo $myCoffee . '<br>';
// $myCoffee->reHeat(80);

// $myCoffee->coolDown(30);
// $myCoffee->sip(150);
// $myCoffee->sip(100);
// $myCoffee->sip(100);
// $myCoffee->sip(100);

while ($myCoffee->getQuantity() > 0) { // While there is coffee in my cup
    $quantityToSip = rand(10, 60);
    $myCoffee->sip($quantityToSip);
    $myCoffee->coolDown(1.5); // Cup loose 1.5 °C on each sip
}
