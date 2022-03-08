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