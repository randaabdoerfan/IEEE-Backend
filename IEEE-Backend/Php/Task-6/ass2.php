<?php
// ===========التكليف الاول ===========
echo 10 * 20 + 15 % 3 + 190 + 10 - 400; // 0

// ===========التكليف الثانى===========
$a = "10";
echo +$a ;
echo gettype(+$a) ;
echo (int)$a;
echo @(gettype(int)$a) or die("fds");
echo intval($a);
echo (gettype(intval($a)));
echo number_format($a);
echo (gettype(number_format($a)));
 echo $a + 100
echo gettype($a+0);

// ===========التكليف الثالث  ===========
$a = 10;
$b = 20;
var_dump($a <=> $b);

// ===========التكليف الرابع  ===========
$a = 10;
$b = 20;
$c = 15;

var_dump($a != $b); 
var_dump($c != $a); 
var_dump($a < $b); 
var_dump($a <= $b); 
var_dump($a < $c);
var_dump($a <= $c); 
var_dump(gettype($a) === gettype($b)); 
var_dump(gettype($a) === gettype($b)); 
var_dump(gettype((float) $a) !== gettype($b)); 

// ===========التكليف الخامس ==========
$points = 10;
$points++;
$points++;
$points++;
echo $points; // 13
$points--
$points--
$points--
$points--
$points--
echo $points; // 8;

// ===========التكليف السادس ==========
$a = "Elzero";
$b = "Web";
$c = "School";

// Method One
 $d = $a $b $c;

// Method Two
$d = ($a) ($b) ($c);

// Method Three
 $d = $a ." " .$b. " ". $c

// Method Four
 $d .="$a "
 $d .="$b "
 $d .="$c"
echo $d; 

// ===========التكليف السابع ==========
$a = 10;
$b = 20;

echo $a + $b * $a + $b + $a * $a * $a; // 10000
// ===========التكليف الثامن==========
// Code 1
$a = @$b or die("variable not found");

// Code 2
$f = @file("Not_A_File") or die("file not found");

// Code 3
(@include("Not_A_File")) or die("file you wanna include not found");
