<?php 

// Repetition Control Structures

/*
	While Loop
	Do-While Loop
	For-Loop
*/
// While Loop
function whileLoop(){
	$count = 5;

	while($count !== 0){
		echo $count.'<br/>';
		$count--;
	}
}

// Do-While Loop
function doWhileLoop(){
	$count = 20;

	do{
		echo $count.'</br>';
		$count--;
	}while($count > 0);
}

// For Loop
function forLoop(){
	for($count = 0; $count <= 20; $count++){
		echo $count.'</br>';
	}
}

// Continue and Break Statements
/*
	Continue is a keyword that allows the code to go to the next loop without finishing the current code block.
	Break keyword ends the execution of the current loop
*/
function modifiedForLoop(){
	for($count = 0; $count <= 20; $count++){
		if($count % 2 === 0){
			continue;
		}
		echo $count.'<br/>';
		if($count > 10){
			break;
		}
	}
}

// Array Manipulation
$studentNumbers = array('2020-1923', '2020-1924', '2020-1925', '2020-1926', '2020-1927'); //before PHP 5.4
$studentNumbers = ['2020-1923', '2020-1924', '2020-1925', '2020-1926', '2020-1927']; // introduced on PHP 5.4

// Simple Arrays
$grades = [98.5, 94.3, 89.2, 90.1];
$computerBrands = ['Acer', 'Asus', 'Lenovo', 'Neo', 'Redfox', 'HP', 'Toshiba', 'Fujitsu'];
$tasks = [
	'drink html',
	'eat javascript',
	'inhale css',
	'bake sass'
];

// Associative Array
$gradePeriods = ['firstGrading' => 98.5, 'secondGrading' => 94.3,'thirdGrading' => 89.2,'fourthGrading' => 90.1];

// Two-dimensional array
$heroes = [
	['iron man', 'thor', 'hulk'],
	['wolverine', 'cyclops', 'storm'],
	['darna', 'captain barbel', 'lastikman']
];

// Two-dimensional associative array
$ironManPowers = [
	'regular' => ['repulsor blast', 'rocket punch'],
	'signature move' => ['unibeam']
];

// Array Sorting
$sortedBrands = $computerBrands;
$reverseSortedBrands = $computerBrands;

// Sort Arrays
sort($sortedBrands);
rsort($reverseSortedBrands);

// Other Array Functions
// brands = array. brand = elements
// in_array(needle, haystack)
// needle is the brand we'll be looking for
// haystack yung array na panggagalingan
function searchBrand($brands, $brand){
	return (in_array($brand, $brands)) ? "$brand is in the array" : "$brand is not in the array.";
}

$reversedGradePeriods = array_reverse($gradePeriods);
