<?php
require_once 'Cat.php';

$cat1 = new Cat('Lucy', '15', 'blue', 'female', 'nasty');
$cat2 = new Cat('Lucy', '15', 'blue', 'female', 'nasty');
$cat3 = new Cat('Lucy', '15', 'blue', 'female', 'nasty');

$cats = array(
    $cat1,
    $cat2,
    $cat3
);
foreach ($cats as $cat) {
    $info = $cat->getInfos($cat);
    foreach ($info as $key => $value) {
        echo "$value.<br>";
    }
}