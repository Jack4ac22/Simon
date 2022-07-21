<?php
// numerical arrays:
// in php we can initialize an empty array 
$movies = array(
    'Night',
    'madness',
    'leaking'
);
echo '<pre>'; // pre is used to format the echo which can only work with strings, we need ti use var-dump tor arrays
var_dump($movies);
echo '</pre>';

//getting an element from array
echo $movies[1];

//creating a new element in the array
$movies[3] = 'samsomsim';

$movies[] = 'streamin where'; // adding an element to the end of the array.
// we can overwrite an elemen by creating an element at its place

//remove an element in an array
unset($movies[2]);

echo '<pre>';
var_dump($movies);
echo '</pre>';

// counting the number of elements
$numberElements = count($movies);
echo $numberElements;

//associative arrays
$contactInformation = [
    'firstName' => 'Ricardo',
    'phoneNumber' => '+3526665554212',
    'mailAdress' => 'Email@mail.com'
];

//access an element of the array
echo $contactInformation['firstName'];


//creat a new element to the array 
$contactInformation['height'] = 180;

echo '<pre>';
var_dump($contactInformation);
echo '</pre>';

//multi-dementional array
$contactInformations = [
    0 => [
        'firstName' => 'Ricardo',
        'phoneNumber' => '+3526665554212',
        'mailAdress' => 'Email@mail.com'
    ],
    1 => [
        [
            'firstName' => 'Minus',
            'phoneNumber' => '+356422',
            'mailAdress' => 'something@mail.com'
        ]
    ]
];
echo '<pre>';
var_dump($contactInformation);
echo '</pre>';
