<?php
require_once 'FlowerManager.php';
$flowers = FlowerManager::findAll();
// print_r($flowers);
foreach ($flowers as $key => $flower) {
    $id = $flower->get_id();
    $name = $flower->get_name();
    $price = $flower->get_price();
    $picture = $flower->get_picture();

    echo '<h2>' . 'Name: ' . $name . '</h2>' . '<p>' . 'costs:' . $price .  '</p>' . '<p>' . "<a href=\"flower-detail.php?id=$id\">"  . 'See more ...' . '</a>'  .  '</p>';
    echo "<img src=\"$picture\" alt=\"picture of $name\" width=\"150px\">";
}
