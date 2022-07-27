<?php
//sessions


// we need to start by creating a session, unless it is already open, it will try to get the data from the first one>
session_start();

$_SESSION['cart'] = 'Ttttt'; // adding an element to the session

//unset($_SESSION['cart']); // removing the element

echo '<pre>';
var_dump($_SESSION);
echo '</pre>';

// the data are saved in a file in MAMP/tmp/php as it is a local server