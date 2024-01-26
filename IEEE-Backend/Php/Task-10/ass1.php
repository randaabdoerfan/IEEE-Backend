<?php
#==========التكليف الاول============
date_default_timezone_set("Asia/Riyadh");
echo date_default_timezone_get() ."<br>";
$d= date_create("" ,timezone_open("Asia/Riyadh"));
echo date_format($d ,"D , d  M  y - h:i:s A") ."<br>";
echo date_format($d ,"l , d  F  Y - h:i:s A") ."<br>";
#==========التكليف الثانى==========
$date = "2005-10-02";
date_default_timezone_set("Africa/Cairo");
echo date_default_timezone_get() ."<br>" ;
$d= date_create($date);
date_add($d ,date_interval_create_from_date_string("15 hours 15 minutes 15 seconds"));
echo date_format($d ," Y, F, l 'dS' G :i:s") ."<br>" ;

#==========التكليف الثالث==========
date_default_timezone_set("Africa/Cairo");
$date = "1990-10-01";
$old  = date_create($date);
$now = date_create("now");
$interval = $old->diff($now);
$diff_d= $interval->format('%R%a days') ;
$diff_y= $interval->format('%R%y years')  ;

echo "From Epoch Time Till ". $date ." Is Approximately " . $diff_d ."Days" ."<br>";
echo "From Epoch Time Till ". $date ." Is Approximately " . $diff_y ."Years"."<br>";

#==========التكليف الرابع==========
date_default_timezone_set("Africa/Cairo");
$date = "1990-10-01";
$old = date_create("1990-10-01");
$now = date_create();
$diff = date_diff($old ,$now);

echo "From Epoch Time Till ". $date ." Is Approximately " . $diff->days ."Days" ."<br>";
echo "From Epoch Time Till ". $date ." Is Approximately " . $diff->y ."Years" ."<br>";
#==========التكليف الخامس==========
date_default_timezone_set("Africa/Cairo");
echo time();
echo "<br>";
$d=date_create();
$da2=getdate() ;
/*echo "<pre>";
print_r($da);
echo "</pre>";*/
echo $da2[0];
$da3=gettimeofday();
/*echo "<pre>";
print_r($da3);
echo "</pre>";*/
echo $da3->sec ;


