<?php
/*******************************************************
 * Copyright (C) 2016 Jay Wolfe
 * 
 * This file is the solution to the question:
 * https://www.hackerrank.com/challenges/palindrome-index
 * 
 * Redistribution and use in source and binary forms are permitted.
 *******************************************************/
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */

$cnt = fgets($_fp);
for ($i=0; $i < (int)$cnt; $i++) {
    $line = fgets($_fp);
    if ($line !== false) {
        print getPalindromeIndex($line) . "\n";
    }
}

function getPalindromeIndex($str) {
  $str = trim($str);
  $str_idx = '-1';
  $str_cnt = strlen($str);
  $h_cnt = intval($str_cnt / 2);
  $h_mod = $str_cnt % 2;
  for ($i = 0, $j = $str_cnt-1; $i < $h_cnt; $i++, $j--) {
    if ($str[$i] != $str[$j]) {
      $str_idx = ($h_mod > 0 ? $i : $j);
      break;
    }
  }
  return $str_idx;
}
?>