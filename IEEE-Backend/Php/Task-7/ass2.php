<?php
#==================التكليف الاول ============
for ($index=10 ; $index >=1 ; $index-- ) {
        echo  $index ;
        echo "<br>" ;
}
#==================التكليف الثانى============
for ($index=0 ; $index <=20 ; $index=$index + 2){
        if($index >0){
                echo $index  ;
                echo "<br>";  
        }
}
echo "###" ;
echo "<br>";
$index=0 ;
do {
        $index = $index + 2; 
        echo $index  ;
        echo "<br>";  
}
while ($index <20) ;
echo "###" ;
echo "<br>";

#==================التكليف الثالث============
$num = 2;
$num2=$num-1;
while ($num < 520) {
 echo $num2 ;
 $increase =$num2 + $num1 ;
 $num=$increase * 2;
 echo "<br>";
}
#==================التكليف الرابع ============
$start = 10;
$end = 0;
$stop = 3;

for ($start ;$start >=$stop ;$start--){
        if($start <10 ){
                echo $end . $start ;
                echo "<br>";
        }
        elseif ($start >=10){
                echo $start ; 
                echo "<br>" ;    
        }
}
#==================التكليف الخامس============
$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];
foreach($mix as $num ){
        if ($num > 1 and $num <=4){
                echo $num ."<br>" ;  
        } 
}
#==================التكليف السادس ============
$money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];

foreach($money as $key => $value ){
        echo "The Name Is " .$key. " And I Need ".$value." Pound From Him" ."<br>" ;
}
#==================التكليف السابع============
$mix = [1, 2, "A", "B", "C", 3, 4];
$numbers=0;
foreach($mix as $num ){
        if ($num >= 1 and $num <=4){
                echo $num ."<br>" ;
                $numbers++;  
        } 
}
$letters=count($mix) -$numbers ;
echo $numbers ." Numbers Printed" ."<br>";
echo $letters ." Letters Ignored"."<br>";
#==================التكليف الثامن ============
$nums = [1, 13, 12, 20, 51, 17, 30];
for ($start=0 ;$start <= count($nums) ; $start++){
       if($nums[$start]%2 == 0){
              echo $nums[$start] / 2;
              echo "<br>";
       }
}
#==================التكليف التاسع ============
$help_num = 3;
$nums = [4, 5, 6, 1, 2, 3];
$names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];
foreach($nums as $num){
        $index=$num -$help_num;
        if ( $index >0 and $index <=2){
                echo $names[$index] ;
                echo "<br>";
        }
}
#==================التكليف العاشر============
$help_num = 4;
$nums = [2, 4, 5, 6, 10];
$invs =array_reverse($nums);
foreach($nums as $index => value ){
        $sum =$nums[$index] + $invs[$index] ;
        echo $nums[$index] ." + " .$invs[$index] " = " $sum ;
}
