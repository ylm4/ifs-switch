<?php

//is_null() switch case
$num= NULL;

switch ($num) {
  case NULL:
    echo "NULL <br>";
}    



//empty() isset() switch case
$string = '';
switch(TRUE) {
  case empty($string):
    echo "String is empty. ";
  case isset($string):
    echo "  String is set<br>"; 
}


// isset() 

$word = "apple";
switch(TRUE) {
  case isset($word):
  var_dump(isset($word));
    echo "Word is set. <br>";
}


//3 functions

$var = '';
switch(TRUE) {
  case is_null($var):
  var_dump(is_null($var));
    echo " Var is NULL. ";
  case isset($var):
  var_dump(isset($var));
    echo " Var is set. ";
  case empty($var):
  var_dump(empty($var));
    echo " Var is empty.";
}
?>
