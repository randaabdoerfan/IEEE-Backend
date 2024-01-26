<?php
//========== التكليف الاول ==========
echo (int)(15.2 + 14.7 + (10.5 + 10.5)); // 50
echo '<br>';
echo gettype((int)(15.2 +(int) 14.7 + (int)(10.5 + 10.5))); // Integer
echo '<br>';
//========== التكليف التانى ===========
echo gettype(100);
echo '<br>';
echo var_dump(100);
echo '<br>';
//========== التكليف التالت ===========
echo "Hello "Elzero" \\\\ """ We Love "$$PHP""";
echo '<br>';
//========== التكليف الرابع ===========

echo nl2br("We \nLove \n Elzero \n Web \n School");
echo '<br>';
//========== التكليف الخامس===========
echo <<<'text'
Hello "'Elzero'"    
We Love $Programming$     
Languages Specially "PHP"
text;
echo '<br>';
//========== التكليف السادس ===========
$something = "Programming";
echo <<<"code"
Hello \PHP\
We Love something
    code;
echo '<br>';
//========== التكليف السابع===========
echo is_string("Hello PHP");
echo '<br>';
echo gettype(is_string("Hello PHP"));
echo '<br>';
//========== التكليف الثامن ===========
echo [
  [FrontEnd] => [
      [0] => HTML
      [1] => CSS
      [JS] => [
          [Vuejs] => [
              [2] => v2
              [3] => v3 [
          [0] => Reactjs
          [1] => Svelte
  [BackEnd] => [
      [0] => PHP
      [1] => MySQL
      [2] => Security [
  [0] => Git
  [1] => Github
  [Testing] => [
      [0] => Unit Testing
      [1] => End To End
      [2] => Integration
]