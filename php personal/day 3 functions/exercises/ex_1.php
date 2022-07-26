<?php

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 1 </p>';
function compareTwo($a, $b)
{
    if ($a != $b) {
        if ($a > $b) {
            echo 'the first number is bigger' . '<br>';
        } else {
            echo 'the first number is smaller' . '<br>';
        }
    } else {
        echo 'the two numbers are equal.' . '<br>';
    }
}
compareTwo(3, 6);
compareTwo(3, -5);
compareTwo(5, 5);
/*
- Exercise 1
Write a function that:
    - Takes into parameter two numbers.
    - Check which is the largest number.
The expected result is this:
    "The first number is higher" (if the first number is higher than the second number)
    "The first number is smaller" (if the first number is smaller than the second number)
    "The two numbers are identical" (if the two numbers are equal)
*/

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 2 </p>';
function htmlImages($source)
{
    echo "<img src='$source' width:'100px' >";
}

htmlImages('https://cdn.pixabay.com/photo/2022/07/13/11/56/cat-7319151_960_720.jpg');
/*
-- Exercice 2
Write a htmlImages($src) function that:
    - takes a string as argument ($src)
    - display an html <img> tag with $src source
Example :
    htmlImages('skate.jpg') 
    	> Displays <img src='skate.jpg'>
*/


echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 3 </p>';

$array = array("Salad" => 1.03, "Tomato" => 2.3, "Oignon" => 1.85, "Red cabbage" => 0.85);

function arrayCalcul($array)
{
    $total = 0;
    foreach ($array as $price) {
        $total += $price;
    }
    $sumCalcul = $total / count($array);
    echo 'the sum is: ' . $sumCalcul;
}
arrayCalcul($array);
/*
-- Exercise 3
	3.1
	Write a PHP script that:
	    - Copy the code from Michel supermarket exercise.
	    - Calculates the sum of Michel's expenses (already done)
	3.2
	Write a function that will:
	- Take an array as input
	- Calculate the sum of the expenses of the array
	- return the sum
*/

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 4 </p>';
function multiplication($x = 1, $y = 1)
{
    echo 'the multiplication result is: ' . $x * $y . '<br>';
};
multiplication(10, 2);
multiplication(4);
/*
-- Exercice 4
Ecrire une fonction qui :
    - Prend en paramètre deux nombres.
    - Qui retourne le résultat de la multiplication des deux nombres
    - Tous les paramètres doivent avoir une valeur par défaut.
    - Appeler votre fonction avec les nombres 10 et 2.
    - Appeler votre fonction avec un seul nombre : 4
Write a function that:
    - Takes two numbers as parameter.
    - That returns the result of the multiplication of the two numbers
    - All parameters must have a default value.
    - Call your function with the numbers 10 and 2.
    - Call your function with a single number: 4
*/




echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 5 </p>';
var_dump(str_split('asddsa'));
function PaliCheck($text)
{
    $matchingError = 0;
    $length = strlen($text);
    $textArray = str_split(strtolower($text));
    for ($i = 0; $i < $length / 2 - $length % 2; $i++) {
        if ($textArray[$i] != $textArray[$length - $i - 1]) {
            $matchingError++;
            break;
        }
    }
    if ($matchingError > 0) {
        echo 'it is not a palindrome.';
    } else {
        echo 'it is a palindrom';
    }
}
PaliCheck('Asdffdsa');

/*
-- Exercice 5
Write a PHP script that checks if a string is a palindrome.
A palindrome is a chain of letters whose order of letters remains the same whether read from left to right or from right to left.
Example : 
"kayak"
"xanax"
"poop"
*/


echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 6 </p>';
function primCheck($number)
{
    $divi = 0;
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            $divi++;
        }
    }
    if ($divi > 0) {
        echo 'number ' . $number . ' is not a prim number';
    } else {
        echo 'number ' . $number . ' is a prim number';
    }
}
primCheck(17);
/*
-- Exercice 6
Write a function that checks if a number is a prime number.
A prime number is an integer greater than 1 that can only be divided by itself and 1.
*/



echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 7 </p>';
function reverse($array)
{
    $variable = 0;
    for ($i = 0; $i < count($array) / 2 - count($array) % 2; $i++) {
        $variable = $array[$i];
        $array[$i] = $array[count($array) - $i - 1];
        $array[count($array) - $i - 1] = $variable;
    }

    print_r($array);
}

reverse([1, 2, 3, 4, 5, 6, 7, 8]);
/*
-- Exercice 7 :
	Write a PHP function that return the reverse(mirror) of an array.
	You can use only one other variable (simple, no array).
	You can only use count() or strlen() function.
*/
