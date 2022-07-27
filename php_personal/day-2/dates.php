<?php
//setting the timezone 
date_default_timezone_set('Europe/Luxembourg');

// time stamp : the number of seconds between now and  first of january 1970. 
//display the date ina nice format: date() function;
echo date('d/m/y') . '<br>';
echo date('m') . '<br>';
echo date('M') . '<br>';
echo date('d/m/y h:i:s') . '<br>';

// retrive the time stamp, convert it into date.
echo strtotime('now') . '<br>';
echo strtotime('next Thursday') . '<br>';
echo strtotime('+3 days') . '<br>';
echo strtotime('23/septmber/1984') . '<br>';

//we can use date() with time stamp
$timeStamp = 1658749155;
echo date('d/m/y h:i:s', $timeStamp) . '<br>';
