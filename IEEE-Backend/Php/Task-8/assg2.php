<?php
#=============التكليف الاول =========
$friends = [
    "AG" => "Ahmed Gamal",
    "OM" => "Osama Mohamed",
    "MG" => "Mahmoud Gamal",
    "AS" => "Ahmed Samy",
    "FA" => "Farid Ahmed",
    "SM" => "Sayed Mohamed"
];
$arr=array_change_key_case($friends ,CASE_LOWER);
 echo "<pre>";
 print_r(array_chunk($arr ,2 ,True));
 echo "</pre>";
 #=============التكليف الثانى=========
 $codes = ["H", "C", "J"];
 $means = ["HTML", "CSS", "JavaScript"];
 echo "<pre>";
 print_r(array_combine($codes,$means));
 echo "</pre>";
#=============التكليف الثالث=========
$friends = [
    "Ahmed Gamal" => "AG",
    "Osama Mohamed" => "OM",
    "Mahmoud Gamal" => "MG",
    "Ahmed Samy" => "AS"
  ];
  $friends1=array_flip($friends);
  $friends2 =array_reverse($friends1);
  echo "<pre>";
 print_r(array_change_key_case($friends2));
 echo "</pre>";
#=============التكليف الرابع=========
$nums = [10, 20, 30];

echo array_sum($nums);
echo "<br>";
echo $nums[0]+$nums[1]+$nums[2];
echo "<br>";
#=============التكليف الخامس=========
$nums = [5, 10, 20, 5, 30, 40];
echo array_sum($nums);

#=============التكليف السادس=========
$chars = ["A", "B", "C", "D", "E"];
$char = "@@";
$zero = 0;
echo "<pre>";
print_r(array_pad($chars,10,$char[0]));
echo "</pre>";
#=============التكليف السابع=========
$names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];

$ne1=next($names);
$ne2=next($names);

echo current($names) . "<br>"; // "Sayed"

$en=end($names);

echo current($names) . "<br>"; // "Ali"

$re=reset($names);

echo current($names) . "<br>"; // "Osama"

$en=end($names);
$pre=prev($names);

echo current($names) . "<br>"; // "Mahmoud"
#=============التكليف الثامن=========
$chars = ["A", "B", "C"];
#1
echo "<pre>";
print_r(array_pad($chars,4,"D"));
echo "</pre>";
#2
$chars = ["A", "B", "C"];
$chars[3]="D";
echo "<pre>";
print_r($chars);
echo "</pre>";
#3
$chars = ["A", "B", "C"];
array_push($chars,"D");
echo "<pre>";
print_r($chars);
echo "</pre>";
#4
$chars = ["A", "B", "C"];
$char=["D"];
echo "<pre>";
print_r(array_merge($chars,$char));
echo "</pre>";
#=============التكليف التاسع=========
$nums = [1, 2, 3, 4, 5, 6];
echo "<pre>";
print_r(array_slice($nums,1,3));
echo "</pre>";

#=============التكليف العاشر=========
$mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];
$nums = [4, 5, 6];

echo "<pre>";
print_r(array_splice($mix,3,3, $nums));
echo "</pre>";
echo "<pre>";
print_r($mix);
echo "</pre>";
#=============التكليف الحادى عشر =========
$arr = ["A", "B", "C", "D", "E"];

#=============التكليف الثانى عشر =========
$nums = [11, 2, 10, 7, 20, 50];

function add($n1,$n2){
    return $n1+$n2 ;
}
echo array_reduce($nums ,"add",0);
echo "<br>";
#=============التكليف الثالث عشر =========
$nums = [10, 100, -20, 50, 30];
function maxnum($n1 ,$n2){
    if($n1>$n2){
     return $n1;
    }else return $n2 ;
}
echo array_reduce($nums ,"maxnum");
echo "<br>";
#=============التكليف الرابع عشر =========
$nums = [10, 100, -20, 50, 30];
function minnum($n1 ,$n2){
    if($n1 < $n2){
     return $n1;
    }else return $n2;
}
echo array_reduce($nums ,"minnum");
echo "<br>";
#=============التكليف الخامس عشر =========
$chars = ["o", "r", "e", "z", "l", "E"];

$arr=array_reverse($chars);
echo "<pre>";
print_r(implode($arr));
echo "</pre>";
#=============التكليف السادس عشر =========
$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];
$mix1=array_shift($mix);
$mix2=array_shift($mix);
$mix3=array_shift($mix);
echo "<pre>";
print_r($mix);
echo "</pre>";
function odd($n1 ){
    if ($n1%2 != 0){
        return $n1;
    }
}
echo "<pre>";
print_r(array_reduce($mix , "odd"));
echo "</pre>";
#=============التكليف السابع عشر =========
$nums = [1, 2, 3, 4, 5, 6];
echo "<pre>";
print_r($nums[array_rand($nums , 5)]);
echo "</pre>";
#===========التكليف الثامن عشر =========
$title = "E&z\$r0 W\$b Sch00&";

str_replace("&" ,"l" ,$title);
str_replace("$", "e", $title);
str_replace("\\","" ,$title);
