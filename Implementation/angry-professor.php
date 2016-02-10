<?php
/*******************************************************
 * Copyright (C) 2016 Jay Wolfe
 * 
 * This file is the solution to the question:
 * https://www.hackerrank.com/challenges/angry-professor
 * 
 * Redistribution and use in source and binary forms are permitted.
 *******************************************************/
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$t);
for($a0 = 0; $a0 < $t; $a0++){
    fscanf($handle,"%d %d",$n,$k);
    $a_temp = fgets($handle);
    $a = explode(" ",$a_temp);
    array_walk($a,'intval');
    $res = 0;
    foreach ($a as $stu) {
         $res += ($stu >= 0 ? 1 : 0);
    }
    if ($res < $k) {
        print "YES\n";
    }
    else {
        print "NO\n";
    }
}
?>