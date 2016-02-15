<?php
/*******************************************************
 * Copyright (C) 2016 Jay Wolfe
 * 
 * This file is the solution to the question:
 * Get a merged array from two sorted arrays
 *
 * NOTE: Not to be confused with merge sort algorithm by using array_slice function (and the like)
 * as shown here: http://www.stoimen.com/blog/2012/03/05/computer-algorithms-merge-sort/
 * 
 * Redistribution and use in source and binary forms are permitted.
 *******************************************************/

function getMergedArray($arr_odd, $arr_even) {
	$arr_new = array();
	$j = 0;
	foreach ($arr_odd as $odd) {
		for ($i = $j; $i < count($arr_even); $i++) {
			if ($odd < $arr_even[$i]) {
				array_push($arr_new, $odd);
				break;
			}
			else {
			 	array_push($arr_new, $arr_even[$i]);
			 	$j++;
			}
		}
	}
	if ($odd > $arr_even[$j]) {
		array_push($arr_new, $odd);
	}
	else {
		for ($i = $j; $i < count($arr_even); $i++) {
			array_push($arr_new, $arr_even[$i]);
		}
	}
	return $arr_new;
}

echo "<pre>";

$arr_odd = array(3, 6, 7);
$arr_even = array(4, 8, 10);
print_r( getMergedArray($arr_odd, $arr_even) );

$arr_odd = array(3, 6, 7);
$arr_even = array(4, 8, 10, 12, 14);
print_r( getMergedArray($arr_odd, $arr_even) );

$arr_odd = array(3, 5, 7, 19, 21);
$arr_even = array(0, 4, 8, 14, 18, 20);
print_r( getMergedArray($arr_odd, $arr_even) );

echo "</pre>";
?>
