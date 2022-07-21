<?php
// 1, if syntax
$a = 5;
if ($a == 6) {
    echo 'is equale to six';
} else if ($a === 5) {
    echo 'equal to five';
} else {
    echo 'it is not 6 nor 5';
}
echo '<br>';
// the short way to write the same code... if there is only one excuted.
if ($a == 5)
    echo 'it is five';

//compare operators equal == , strictly equal ===, not equal by replacing one of the equal signs with an exlamation mark !
$a = 2;
$b = '2';
if ($a == $b)
    echo 'it is ==';
if ($a === $b)
    echo 'it is ===';
 // comparing operators < > <= >= 
 // logical operators can use and == && ; // || == or
