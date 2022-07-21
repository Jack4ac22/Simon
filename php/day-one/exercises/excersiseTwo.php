<?php

/* 
- Exercise 1 :
-- Create your first fruit array containing: "Apple, Strawberry, Pineapple, Lemon".
-- Display the value of the 2nd element.
*/
$fruitsArray = [
    0 => 'Apple',
    1 => 'Strawberry',
    2 => 'Pineapple',
    3 => 'Lemon'

];
echo $fruitsArray[1];
echo '<pre>';
var_dump($fruitsArray);
echo '</pre>';
/* 
- Exercise 2
-- Create an associative array that contains the number in stock for each item: 20 T-Shirts, 10 Caps and 5 Shoes.
-- Display the stock of caps.
*/
$storageCount = [
    'T=shirt' => 20,
    'Caps' => 10,
    'Shoes' => 5
];
echo  $storageCount['Caps'];

/*
- Exercise 3
Based on the previous variables you created.
The clothing store has just received a new stock of shoes and caps.
-- Add 5 caps.
-- Add 20 shoes.
-- Display the shoe stock.
*/
$storageCount['Caps'] = $storageCount['Caps'] + 5;
$storageCount['Shoes'] = $storageCount['Shoes'] + 20;
echo  '<br>';
echo '<pre>';
var_dump($storageCount);
echo '</pre>';
/*
- Exercise 4
You have a list of contacts.
Each contact has a name, an email and a phone number.
Here is the list of these contacts:
> Name: Ricardo, Tel: 0677777777, Email: ricardo@gmail.com
> Name: Michael, Tel: 0606060606, Email: mj@gmail.com
> Name: Emmanuel, Tel: 0610101010, Email: manu@gmail.com
-- The goal of the exercise is to create an array that will contain all the information for ALL my contacts. 
I need to be able to access a contact's information easily and quickly. There is many ways to do it, so try to do it the way you want.
You will have to display Ricardo's email at the end of the script.
*/
$myContactList = [
    0 => [
        'Name' => 'Ricardo',
        'Tel' => '0677777777',
        'Email' => 'ricardo@gmail.com'
    ],
    1 => [
        'Name' => 'Michael',
        'Tel' => '0606060606',
        'Email' => 'mj@gmail.com'
    ],
    2 => [
        'Name' => 'Emmanuel',
        'Tel' => '0610101010',
        'Email' => 'manu@gmail.com'
    ]
];
echo 'Email: ' . $myContactList[0]['Email'] . ' of ' . $myContactList[0]['Name'];
