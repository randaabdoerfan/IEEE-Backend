<?php //============ التكليف الاول ==========?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta <?php $content="Elzero Courses" ?>>
    <title>Welcome To<?php echo $content ?></title>
  </head>
  <body>
    <h1><?php echo $content ?></h1>
    <p>Here In <?php echo $content ?> We Provide Front-End And Back-End Courses</p>
    <hr>
    <div><?php echo $content ?> Is The What You Need.</div>
    <footer>All Right Reserved To <?php echo $content ?> </footer>
  </body>
</html>

<?php //============ التكليف الثانى ==========
$name = "elzero";
$$name = "Web"; 
echo $$name ;
echo $elzero ;
echo "$[$$name]";
echo "$[$elzero]";
?=$variable?
echo <<<EOT
<p>
   $$name!
</p>
EOT;
//============ التكليف الثالث==========
$a = 200;
$b = &$a;
$a = 100;

echo $b; // 100
//============ التكليف الرابع==========
echo $_DOCUMENT_ROOT ;
echo $_SERVER_NAME ;
print getenv ("SCRIPT_NAME");
phpinfo() ;

//============ التكليف الخامس==========
/*echo
BREAK
IF 
WHILE
include
empty()
undefined
function
for
return
int
double
swtich
clone
or
and
not
 */

 //============ التكليف السادس==========
 echo __LINE__;
 echo __FILE__;
 echo __DIR__;
?>
