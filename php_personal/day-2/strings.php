<?php
//string function
$myString = 'Here is some Text, Not realy';
//UpperCase and lowercase
echo strtoupper($myString) . '<br>';
echo strtolower($myString) . '<br>';
// find the possition of a substring in a string
echo strpos($myString, 'is') . '<br>';
// substring: retrive one part or the string
echo substr($myString, 8) . '<br>';
// substring 
echo substr($myString, 8, 9) . '<br>';

$lorem = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste voluptates, perferendis quidem saepe ab repellendus voluptate accusamus totam quia culpa quaerat maxime laboriosam fuga. Molestias impedit eius omnis inventore natus.';
echo substr($lorem, 0, 30) . '...' . '<br>';
