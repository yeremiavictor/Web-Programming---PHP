<?php

//operator logikan untuk biner

$a = 12;
$b = 14;

// bitwise AND
$c = $a & $b;
echo "$a & $b = $c";
echo "<br>";

// bitwise OR
$c = $a | $b;
echo "$a | $b = $c";
echo "<br>";

// bitwise XOR
$c = $a ^ $b;
echo "$a ^ $b = $c";
echo "<br>";

// Shift Left
$c = $a << $b;
echo "$a << $b = $c";
echo "<br>";

// Shift Right
$c = $a >> $b;
echo "$a >> $b = $c";
echo "<br>";
