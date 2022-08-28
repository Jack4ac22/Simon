<?php
require_once 'Cat.php';

$cat1 = new Cat('Lucy', '15', 'blue', 'female', 'nasty');
$info = $cat1->getInfos($cat1);
foreach ($info as $key => $value) {
    echo "$key: $value.<br>";
}
