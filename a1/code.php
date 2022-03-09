<?php

function divisibleByFive(){
	for($count = 0; $count <= 1000; $count++){
		if($count % 5 !== 0){
			continue;
		}
		echo $count.',';
		if($count > 1000){
			break;
		}
	}
}

$student = ['John Smith'];
