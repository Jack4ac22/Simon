<?php
require 'Item.php';

$my_item = new Item('nice', 'just few words');


echo '<pre>';
var_dump($my_item->getName());
echo '</pre>';
