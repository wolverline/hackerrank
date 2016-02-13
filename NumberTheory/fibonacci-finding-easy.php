<?php
/*******************************************************
 * Copyright (C) 2016 Jay Wolfe
 * 
 * This file is the solution to the question:
 * https://www.hackerrank.com/challenges/fibonacci-finding-easy
 * 
 * Redistribution and use in source and binary forms are permitted.
 *******************************************************/
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */

$case = 0;
while (($line = fgets($_fp)) !== false) {
    if ($case == 0) {
        $case = (int) $line;
    }
    else {
        $a_num = explode(' ', $line);
        $init = $a_num[0];
        $add = $a_num[1];
        $run = $a_num[2];
        $sum = findFiboSum($init, $add, $run);
        echo $sum . "\n";
    }
}

function findFiboSum($num, $add, $run) {
    $fibo_sum = 0;
    while ($run > 0) {
        if (!$fibo_sum) $fibo_sum = $add;
        else {
            $fibo_sum = $add + $num;
            $num = $add;
            $add = $fibo_sum;
        }
        $run--;
    }
    return $fibo_sum;
}
?>