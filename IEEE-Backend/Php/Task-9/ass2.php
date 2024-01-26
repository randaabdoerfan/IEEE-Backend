<?php
#==========التكليف الاول==========
echo "<pre>";
print_r(filter_list());
echo "</pre>";
$filters= filter_list();
$filtered = filter_list();

foreach ($new_filters as $id => $name) {
    if (isset($filters[$id])) {
        $filtered[$id] = $filters[$id];
    }
}
echo "<pre>";
print_r($filtered);
echo "</pre>";

print_r($filtered);
print_r($new_filters);
echo round(disk_total_space("D:")/1024/1024/1024/1024 ,2)." Terabyte";
echo "<br>";
#==========التكليف الثانى==========
file_exists("Math - Lecture 3 - Bessel Function.mp4");
echo "<br>";
echo "Size in ".round(filesize("Math - Lecture 3 - Bessel Function.mp4")/1024/1024 )." Megabyte";
echo "<br>";
echo "Size in ".round(filesize("Math - Lecture 3 - Bessel Function.mp4")/1024 )." Kilobyte";
echo "<br>";
#==========التكليف الثالث==========

#==========التكليف الرابع==========

#==========التكليف الخامس==========

#==========التكليف السادس==========


/*echo filter_input(INPUT_GET ,"num");
?>
<form action="" method="GET">
  <input type="text"name="num">
  <input type="submit" value ="send">
</form>*/