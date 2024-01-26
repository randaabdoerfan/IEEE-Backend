<?php
#==========التكليف الاول============
setcookie("style[font]","Swat",strtotime("+ 2 months +5days"));
setcookie("style[layout]","boxed" ,strtotime("+ 2 month +5days"));
setcookie("style[color]" ,"blue" ,strtotime("+ 2 months +5days"));
#==========التكليف الثانى==========
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
#==========التكليف الثالث==========
setcookie("style[layout]","boxed" ,strtotime("- 2 month -5days"));

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
#==========التكليف الرابع==========
setcookie("style[font]","Swat");
setcookie("style[color]" ,"blue" );



