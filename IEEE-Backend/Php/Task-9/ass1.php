<?php
#==========التكليف الاول==========
echo rand(10 ,20);
echo "<br>";
#==========التكليف الثانى==========
$friends =["Osama","Ahmed","Sayed","Ibrahim"];
echo "<pre>";
print_r($friends[array_rand($friends)]);
echo "</pre>";
#==========التكليف الثالث==========
$num1 = 11.5; 
$num2 = 9.4898; 
$num3 = -7.5; 
echo round($num1,0,PHP_ROUND_HALF_DOWN);
echo "<br>";
echo round($num2 ,1);
echo "<br>";
echo round($num3,0,PHP_ROUND_HALF_DOWN);
#==========التكليف الرابع==========
echo "<pre>";
print_r(filter_list());
echo "</pre>";
echo "<br>";
#==========التكليف الخامس==========
$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";

if (filter_var($url1 , FILTER_VALIDATE_URL)) {
  echo ('A Valid URL');
}else {
  echo ("Not A Valid URL");
}
echo "<br>";
if (filter_var($url2, FILTER_VALIDATE_URL)) {
  echo ('A Valid URL');
}else {
  echo ("Not A Valid URL");
}
echo "<br>";
if (filter_var($url3 , FILTER_VALIDATE_URL)) {
  echo ('A Valid URL');
}else {
  echo ("Not A Valid URL");
}
echo "<br>";
if (filter_var($url4 , FILTER_VALIDATE_URL)) {
  echo ('A Valid URL');
}else {
  echo ("Not A Valid URL");
}
echo "<br>";
#==========التكليف السادس==========

$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";

$url1=filter_var($url1, FILTER_SANITIZE_URL);
echo $url1 ;
echo "<br>";
$url2 =filter_var($url2, FILTER_SANITIZE_URL);
echo $url2 ;
echo "<br>";
$url3=filter_var($url3 ,FILTER_SANITIZE_URL);
echo $url3 ;
echo "<br>";
$url4=filter_var($url4 ,FILTER_SANITIZE_URL);
echo $url4 ;
echo "<br>";
