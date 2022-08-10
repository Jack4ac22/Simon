<?php

/*

We have an array of integers, positive, between 1 and $nbElements (nbElements is the number of elements. You can use this variable).

$array = [5, 2, 3, 6, 7];

Examples :

	Write a function call 'FizzBuzz'.
	For each number 'n' of the list, we want the following operations:
		. if the number is divisible by 3 : display 'Fizz'
		. if the number is divisible by 5 : display 'Buzz'
		. if the number is divisible by 3 AND by 5 : display 'TicTac'
		. else : display the number 'n'
*/

function FizzBuzz($array)
{
	foreach ($array as $value) {
		$left3 = $value % 3;
		$left5 = $value % 5;

		if (($left5 == 0) && ($left3 == 0)) {
			echo 'TicTac ';
		} else {
			if ($left3 == 0) {
				echo 'Fizz ';
			}
			if ($left5 == 0) {
				echo  'Buzz ';
			}
		}
		if (($left5 != 0) && ($left3 != 0)) {
			echo  $value . ' ';
		}
	}
}
$array = [5, 2, 3, 6, 7, 15, 3];
FizzBuzz($array);
