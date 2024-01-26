<?php
#==========التكليف الاول ===========
$a = 100;
$b = 200;
$c = 100;
if ($b > $a) {
}if($a == $c) { 
}if($a + $c == $b){
    echo "Yes";
}
echo '<br>' ;
#==========التكليف الثانى===========
// Test Case 1
$a = 100;
$b = 200;
$c = 300;

if ($a > $b) {
    echo "A Is Larger than B";
}elseif($a >$c) {
    echo "A Is Larger Than C";
}else {
    echo "A Is Not larger than B or C" ;
}
echo '<br>' ;
#==========التكليف الثالث===========
?>
<?php
 $admins = ["Osama", "Ahmed", "Sayed"]; 
if ($_SERVER["REUQEST_METHOD"] == "POST" ){
    echo "The Request Method Is Post" ;
    for ($i=0 ;$i<3 ;$i++){
        if ($_POST['user'] == $admins[$i]) {
            echo  "This Username ".$admins[$i]." Is Admin" ;
        }else {
            break;
        }
    }
}
 { ?>

<!Doctype html >
<html>
    <head>
<form action="" method="POST">
  <input type="text" name="user">
  <input type="submit" value="Send">
</form>
</head>
</html>

<?php } ?>
<?php
#================التكليف الرابع================
$a = 30;
$b = 20;
$c = 10;
echo "<br>";
if ($a + $b === $c) echo "A + B = C"; elseif ($a + $c === $b) echo "A + C = B"; elseif ($b + $c === $a) echo "B + C = A"; else echo "The End";
echo "<br>";
#================التكليف الخامس================
$name = "Osama";
$age = 40;
$country = "Egypt";
if  ($age > 18 ) echo "The Age Is Good To Go<br>" ; if (gettype($name) == "string") echo "The Name Is Good To Go<br>" ; if  ($country == "Egypt") echo "The Country Is Good To Go<br>";
#================التكليف السادس================
$genre = "Hack And Slash";

switch($genre ) {
    case "RPG" :
        echo "I Recommend Ys Games";
        break ;
    case "Hack And Slash" :
        echo "I Recommend Castlevania Games";
        break ;
    case "FPS"  :
        echo "I Recommend Uncharted Games";
        break ;
    case "Platform":
        echo "I Recommend Megaman Games";
        break ;
    case "Puzzle":
         echo "I Recommend Megaman Games";
         break ;
    default :
    echo "I Recommend Shadow Of Mordor And Shadow Of War";

}
echo "<br>";
#================التكليف السابع================
$num_one = 23;
$num_two = 5;
$op = "+";
if ($op =="+"){
    echo $num_one + $num_two ;
}elseif ($op =="-"){
    echo $num_one - $num_two ;
}elseif ($op =="*"){
    echo $num_one * $num_two ;
}elseif ($op =="/"){
    echo ceil ($num_one / $num_two) ;
    echo floor ($num_one / $num_two) ;
}else {
    echo "Unkown Operator" ;
}
echo "<br>";
#================التكليف الثامن================
$day = "Sat";

if ($day == "Sat" or "Sun" or "Mon") {
    echo "We Are Open All The Day";
}elseif($day == "Tue" or "Wed" ) {
    echo "We Are Open From 08:12";
}elseif($day == "Thu" or "Fri" ) {
    echo "We Are Closed";
}else {
    echo "Unknown Day";
}
echo "<br>";