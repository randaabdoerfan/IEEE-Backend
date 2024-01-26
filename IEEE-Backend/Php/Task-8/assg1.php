<?php
#==============التكليف الاول========
$let_one ="o" ;
$let_two ="z" ;
$translat =["%" => $let_two ,"0" => $let_one] ;
$str ="El%er0";
echo strtr($str , $translat);
echo "<br>";

#==============التكليف الثانى========
$str ="0rezle";
echo ucfirst(strrev(str_replace("0","o",$str)));
echo "<br>";
#==============التكليف الثالث========
$str ="aAa";
$num =3;
$char ="_" ;
echo str_repeat(substr_replace(strtolower($str), $char ,3,0),3);
echo "<br>";
#==============التكليف الرابع========
$str="<div><b>Elzero</b></div>" ;
echo strip_tags($str ,"<b>") ;
echo "<br>";
#==============التكليف الخامس========
$str = "Elzero Web School";
$e = "e";
$o = "0";
echo substr_count($str ,"W");
echo "<br>";
echo substr_count($str ,"e");
echo "<br>";
#==============التكليف السادس========
$str =["E" ,"l" ,"z" ,"e" ,"r" ,"o"];
echo implode($str);
echo "<br>";
#==============التكليف السابع========
$str =["E" , 1 , 2 ,"l" ,"z" ,"e" ,"r" ,"o"];
unset($str[1]);
unset($str[2]);
print_r($str) ;
echo "<br>";
echo implode($str);
#echo import_request_variables(a-z,$str);
echo "<br>";