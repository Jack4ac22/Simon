<?php
require_once 'Character.php';
require_once 'Equipment.php';
$legolas = new Character('Legolas', 'Elf');
$orky = new Character('Orky', 'Orc');

echo $legolas;


echo $orky;

$sword = new Equipment('Death Sword', 'sword', 10, 0, 0);
$legolas->holding($sword);

echo $legolas;
