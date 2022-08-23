<?php

require_once 'LivingBeing.php';
require_once 'Animal.php';
require_once 'Cat.php';
require_once 'Dog.php';
require_once 'Human.php';
require_once 'Robot.php';

$animals = [];
$garfield = new Cat('Garfield', 'Orange', 'Male', 4);
array_push($animals, $garfield);
$snoopy = new Dog('Snoopy', 'Grey', 'Male', 4);
array_push($animals, $snoopy);
$simon = new Human('Simon', 'brown', 'Male');
array_push($animals, $simon);
$caterson = new Cat('caterson', 'Orange', 'Female', 4);
array_push($animals, $caterson);
$burfingson = new Dog('burfingson', 'Grey', 'Male', 3);
array_push($animals, $burfingson);
$yan = new Human('Yan', 'brown', 'Male');
array_push($animals, $yan);
$catinho = new Cat('Catinho', 'Orange', 'Male', 4);
array_push($animals, $catinho);
$andre = new Human('Andre', 'brown', 'Male');
array_push($animals, $andre);
$bek = new Dog('Bek', 'Grey', 'Male', 3);
array_push($animals, $bek);
$jack = new Human('Jack', 'brown', 'Male');
array_push($animals, $jack);

foreach ($animals as $animal) {
    $animal->make_nois();
    echo '<be>';
}
