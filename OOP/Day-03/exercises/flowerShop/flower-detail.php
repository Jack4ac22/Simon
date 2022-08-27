<?php
require_once 'FlowerManager.php';
$id = $_GET['id'];
$flower = FlowerManager::find($id);
$name = $flower->get_name();
$price = $flower->get_price();
$picture = $flower->get_picture();

echo '<h2>' . 'Name: ' . $name . '</h2>';
echo "<img src=\"$picture\" alt=\"picture of $name\" width=\"250px\">";
echo '<p>' . 'costs:' . $price .  '</p>';
echo '<button>' . 'Buy' . '</button>';
echo '<p>' . "<a href=\"view-flowers.php\">"  . 'Back' . '</a>'  .  '</p>';
