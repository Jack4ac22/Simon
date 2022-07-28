<?php
/*
-- Exercise 1 :
	Write a function that : 
		- Take one float $x as argument
		- Get the integer part of a positive number ($x)
		- Return this integer part
	Example :
		integerPart(5.26) // return 5
		integerPart(10.76) // return 10
*/
echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 1 </p>';

/*
-- Exercise 2 : 
	Write a function 'isOrder' that :
		- Take one array of integer as argument
		- Checks if the elements of the arrays are ordered in ascending order.
*/
echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 2 </p>';
function isOrder($array)
{
	for ($i = 1; $i < count($array) - 1; $i++) {
		if ($array[$i - 1] > $array[$i]) {
			return 'Not Ordered';
		}
	}
	return 'is ordered';
};
echo isOrder([1, 2, 3, 4, 5]);
/*
-- Exercise 3 :
	Write a function 'orderArray' that :
		- Take one array of integer as argument
		- Return an array which was ordered
*/
//to be worked on later
echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 3 </p>';
function isOrdered($array)
{
	$count = count($array) - 1;
	for ($i = 1; $i < $count; $i++) {
		if ($array[$i - 1] > $array[$i]) {
			return false;
		}
	}
	return true;
};
function orderMyArray($array)
{
	if (isOrdered($array) == true) {
		return $array;
	} else {
		$savingSpot = '';
		$count = count($array) - 1;
		for ($o = 1; $o <= $count; $o++) {
			echo 'last position is : ' . $array[$o - 1] .  'current position is : ' . $array[$o] . '<br>';

			if ($array[$o - 1] > $array[$o]) {
				$savingSpot = $array[$o - 1];
				$array[$o - 1] = $array[$o];
				$array[$o] = $savingSpot;
			}
		}
		return orderMyArray($array);
	}
}
$test = [6, 5, 4, 3, 2, 1];
var_dump(orderMyArray($test));


function orderArray($array)
{
	for ($i1 = 1; $i1 < count($array) - 1; $i1++) {
		$savingSpot = '';
		if ($array[$i1 - 1] > $array[$i1]) {
			for ($o = 1; $o < count($array) - 1; $o++) {
				$savingSpot = $array[$o - 1];
				$array[$o - 1] = $array[$o];
				$array[$o] = $savingSpot;
				//[$array[$o - 1], $array[$o]] = [$array[$o], $array[$o - 1]];
			}
		} else break;
	}
	return $array;
};
$test = [5, 4, 3, 2, 1];
echo '<pre>';
var_dump(orderArray($test));
echo '</pre>';
echo '<hr>';
echo '<pre>';
var_dump($test);
echo '</pre>';
