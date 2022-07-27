<?php
// 1.  simple variables: php require an $ signe to declare a variable
$firstName = 'Simon';
$age = 30;
$height = 4.5;
$are_you_drunk = false;

/*
Name of the variable can not start with a number,
but it can contains number or numbers,
only _ Underscore is allowed.

*/
echo $firstName;

// using the double quote on the variable is will still works, ex: echo "$firstName";
// sigle quote will diplay the variable as a string ex: echo '$firstName';

echo "<h1>$firstName</h1>";
echo '<h1>' . $firstName . '</h1>'; //contacination in php is using . dott
echo $height;
echo '<br>';
echo $age;
echo '<br>';

//display type of variable
echo gettype($firstName);
//display content and the type which is used for debug.
echo '<br>';
var_dump($height);
echo '<br>';
var_dump($age);
//2. arrithmetic operatoprs + - * / % ** += ++ 
// increment and decrement are the same of js
//cocatenation: using the dot . to put teo or more dtringd together, 
echo '<br>';
echo 'hello ' . $firstName . '<br>';
//escaping characters we use \ to indecate that it is not an end of the quote
echo 'it\'s easy';
