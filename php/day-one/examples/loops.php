<?php
// 1- for loop
for ($i = 0; $i < 10; $i++) {
    echo $i;
}
$x = 0;
//2- whie loop
while ($x < 10) {
    echo $x;
    $x++;
}
echo '<br>';
//3- do ... while 
$z = 10;
do {
    echo $z;
} while ($z < 10);

// 4- for each:
$fruitsArray = [
    0 => 'Apple',
    1 => 'Strawberry',
    2 => 'Pineapple',
    3 => 'Lemon'

];
foreach ($fruitsArray as $key => $value) { //the key is equal to index
    echo  '<br>' . $key . " is " . $value;
};
