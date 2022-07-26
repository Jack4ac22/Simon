<?php
/*
functions are block of codes that can be rused and it might return somthing or not. that is depending on the designe.
*/
//declaring function:
function my_function()
{
    // we put thecose of the funciton  for example
    echo 'Hello world' . '<br>';
}
My_function();

// functin with return value
function returning()
{
    //returning the message
    return 'Hello world';
    //after the return nothing can be excuted as it will break.
}
echo returning();
$message = returning();
echo '<br>' . $message;


// scope: visibility of your variables. what happens inside the function stays inside and the vice versa. 
$number = 10;
function displayTen()
{
    echo 'my number is ' . $number;
}
//the same thing happens when we declare the function inside the function

//function with parameters
function greeting($firstName)
{
    echo 'hello, weclome to my website ' . $firstName . '<br>';
}
greeting('Sam');
//adding a defalt valeu to the variable in the parameters
function multiplyBy2($x = 1)
{
    return $x * 2;
}

// if the variable is passed as parameter then it will not change its value outside the scoop of the function.