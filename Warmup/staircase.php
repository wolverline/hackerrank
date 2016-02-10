<?php
/*******************************************************
 * Copyright (C) 2016 Jay Wolfe
 * 
 * This file is the solution to the question:
 * https://www.hackerrank.com/challenges/staircase
 * 
 * Redistribution and use in source and binary forms are permitted.
 *******************************************************/
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);

StairCase($n);

function StairCase($n) {
  for ($i = $n; $i > 0; $i--) {
    for ($j = 1; $j <= $n; $j++) {
      if ($j == $i) {
        while ($j <= $n) {
          echo "#";
          $j++;
        }
      }
      else {
        echo " ";
      }
    }
    echo "\n";
  }
}
?>