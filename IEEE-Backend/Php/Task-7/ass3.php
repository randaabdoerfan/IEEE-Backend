<?php 
#==========التكليف الاول==========
function greeting ($name ,$gender =""){
    if ($gender == "Male"){ 
        echo "Hello Mr ". $name ."<br>";
    }elseif($gender == "Female") {
        echo "Hello Miss ". $name ."<br>" ;
    }else {
        echo "Hello ". $name ."<br>" ;
    }
}
echo greeting("Osama", "Male");
echo greeting("Eman", "Female"); 
echo greeting("Sameh"); 
#==========التكليف الثانى==========
function get_arguments(...$strings){
    foreach ($strings as $string):
        echo " " .$string . " " ;
    endforeach;
}
function get_argument(){
    foreach(func_get_args() as $arg):
        echo " ". $arg ." ";

    endforeach;
}
echo get_arguments("Hello", "Elzero", "Web", "School");
echo "<br>"; 
echo get_argument("I", "Love", "PHP");
echo "<br>";
#==========التكليف الثالث==========
function sum_all(...$nums){
    $result=0;
    foreach ($nums as $num):
       if ($num == 5) {
           continue ;
        }elseif ($num == 10 ){
           $num=20 ;
        }
        $result +=$num ;
    endforeach ;
    echo $result ;
    echo "<br>";
}
echo sum_all(10, 12, 5, 6, 6, 10); 
echo sum_all(5, 10, 5, 10); 
#==========التكليف الرابع==========
function multiply(...$args){
    $mult=1;
    foreach($args as $arg) :
        if (is_string($arg) ){
            continue;
        }elseif (is_float($arg) ){
            $arg=intval($arg);
        }
        $mult *= $arg ;
    endforeach ;
    echo $mult;
    echo "<br>";
}
echo multiply(10, 20); 
echo multiply("A", 10, 30);
echo multiply(100.5, 10, "B"); 
#==========التكليف الخامس==========
function check_status($a, $b, $c) {
    if (is_string($a)){
        echo "Hello " .$a .", ";
    }elseif (is_string($b)){
        echo "Hello " .$b .", ";  
    }elseif (is_string($c)){
        echo "Hello " .$c .", "; 
    }
    if (is_int($a)){
        echo "Your Age Is " .$a .", ";
        
    }elseif (is_int($b)){
        echo "Your Age Is " .$b .", ";
    }elseif (is_int($c)){
        echo "Your Age Is " .$c .", ";
    }
    if (is_bool($a) == TRUE){
        echo "You Are Available For Hire"  ;
    }elseif (is_bool($b)== TRUE){
        echo "You Are Available For Hire "  ;
    }elseif (is_bool($c)==TRUE ){
        echo "You Are Available For Hire "  ;
    }elseif (is_bool($a) == FALSE or is_bool($b) == FALSE or is_bool($c) == FALSE) {
      echo "You Are Not Available For Hire";
  }
}
  // Needed Output
  echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo "<br>";
  echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo "<br>";
  echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo "<br>";
  echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"
  echo "<br>";
#==========التكليف السادس==========
function calculate($num1 , $num2 ,$op ="a"){
    if($op == "a" or "add"){
        echo $num1 + $num2 ;
    }elseif($op == "s" or "subtract"){
        echo $num1 - $num2 ;
    }elseif($op == "m" or "multiply"){
        echo $num1 * $num2 ;
    }else{
        echo $num1 + $num2 ;
    }
}
echo calculate(10, 20 ,"a"); // 30
echo "<br>";
echo calculate(10, 20, "a"); // 30
echo "<br>";
echo calculate(10, 20, "s"); // -10
echo "<br>";
echo calculate(10, 20, "subtract"); // -10
echo "<br>";
echo calculate(10, 20, "multiply"); // 200
echo "<br>";
echo calculate(10, 20, "m"); // 200
echo "<br>";
#==========التكليف السابع==========
function calculate($num_one, $num_two) : DOUBLE  {
    return $num_one + $num_two;
  }
  echo calculate(20, 10); // 30
  echo gettype(calculate(20, 10)); // Double
#==========التكليف الثامن==========
$message = "Hello";
$Hello = fn($name) => "Hello" .$name  ;
echo $Hello("Osama"); // Hello Osama
#==========التكليف التاسع==========
$greet = function ($name) { echo "Greaating";};

echo $greet("Osama"); // Greetings