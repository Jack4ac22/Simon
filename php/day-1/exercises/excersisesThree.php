<?php
$avatar = 'https://cdn.pixabay.com/photo/2016/03/31/20/27/avatar-1295773_960_720.png';
$lastName = 'Tambansi';
$firstName = 'Bruto';
$chatractaristic = [
	'atk' => 15,
	'dfn' => 10
];
//echo "<img src =$avratar>";

$charachter = [
    'firstName' => 'Bruto',
    'avatar' => 'https://cdn.pixabay.com/photo/2016/11/18/23/38/child-1837375_960_720.png',
    'lastName' => 'Tambansi',
    'attackPoint' => 8,
    'defensePoint' => 5,
];
/* echo '<pre>';
var_dump($charachter);
echo '</pre>'; */

foreach ($charachter as $key => $value) {
   // echo $value . '<br>';
}

/*
-- Character Exercise
We will continue the 'Character' exercise.
Instead of attack and defense point variables, you need to replace those with an array :
        -- An array of characteristics (attak point, defense point... put anything you want)
        Use an associative array.
You have to use a loop to display all the characteristics now !
*/

$purchases = ["Salad" => 1.03, "Tomato" => 2.3, "Oignon" => 1.85, "Red cabbage" => 0.85];
ksort($purchases);
var_dump($purchases);
echo '<br>';
asort($purchases);
var_dump($purchases);
echo '<br>';
$totalSpending = 0;
foreach ($purchases as $key => $value) {
	$totalSpending = $totalSpending + $value;
}
echo 'Michel\'s total spending: ' . $totalSpending;

$purchasesArray = [
	['purchas' => 'Salad', 'price' => '1.03'],
	['purchas' => 'Tomato', 'price' => '2.3'],
	['purchas' => 'Oignon', 'price' => '1.85'],
	['purchas' => 'Red cabbage', 'price' => '0.85']
];

/*
	- Exercise 1 : 
		Michel went to the supermarket and bought some food.
		He used an array to save his spending.
	    $array = array("Salad"=>1.03,"Tomato"=>2.3,"Oignon"=>1.85,"Red cabbage"=>0.85)
	    Write a script that will : 
	    1. Sort by value (try to look on google) and display the array
	    2. Sort by key in descending order and display the array
	    3. Use a loop to calculate the total of Michel spendings.
	*/
$numbers = array();
for ($i = 1; $i <= 20; $i++) {
	$numbers[$i] = "$i";
}
/*
echo '<pre>';
var_dump($numbers);
echo '</pre>';
*/

$numbers2 = array();
$as = 1;
while ($as <= 20) {
	$numbers2[] = $as;
	$as++;
}
/* echo '<pre>';
var_dump($numbers2);
echo '</pre>'; */


/*
	- Exercise 2 : 
		Using a loop, fill in a array with every number from 0 to 20.
		The element 0 will therefore contain 0, the element 1 will contain 1 etc.
		Do it by using a for loop.
		Once it's done, try to do it also with the while loop.
	*/

$multiTwo = array();
for ($numb = 1; $numb < 11; $numb++) {
	$multiTwo[] = $numb * 2;
}
/* echo '<pre>';
var_dump($multiTwo);
echo '</pre>';*/

/*
	-Exercise 3 :
		Use a loop to create an array.
		This array will contain the multiplication table of 2.
		From 1 to 10.
	*/

$myRandom = [33, 90, 1, 8, 5, 55, 93, 33];
echo '<br>';
$maxNum = $myRandom[0];
$maxNumKey = 0;
foreach ($myRandom as $key => $value) {
	if ($value > $maxNum) {
		$maxNum = $value;
		$maxNumKey = $key;
	}
}
echo 'Max Number = ' . $maxNum . ' Max Number Position = ' . $maxNumKey;

/*
foreach ($myRandom as $key => $value) {
	if ($value == $maxNum) {
		echo '<br>';
		echo 'Max Number\'s position in the array is: ' . $key;
	}
}*/

echo '<br>';
foreach ($myRandom as $key => $value) {
	if ($value < $maxNum) {
		$maxNum = $value;
		$maxNumKey = $key;
	}
};
echo 'Min Number = ' . $maxNum . 'minimun Number position = ' . $maxNumKey;



$maxNumPosition = 0;
$myRandom = [33, 90, 1, 8, 5, 55, 93, 33];
echo '<br>';
foreach ($myRandom as $key => $value) {
	if ($value > $myRandom[$maxNumKey]) {
		$maxNumKey = $key;
	}
}
echo '<p> The maximum number is: ' . $myRandom[$maxNumKey] . ' it\'s position is: </p>' . $maxNumKey;
	/*
	-Exercise 4 :
		Create an array of random numbers.
		You can create it manually. For example $array = [5, 20, 6, -6, 100]
		1. Find the max / min number of the array.
		You can't use any function (max/min/sort).
		You have to use loop + variable
	
		2. Find the position of the max/min also.
		3. CHALLENGE (optional)
		You can only use 2 variables ($array and $i doesn't count).
	*/