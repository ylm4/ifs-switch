<?php
//empt() isset()
//$var1 is not empty so condition1 is false
$var1 = "hello world";
if (empty($var1)) {
  echo "Var1 is empty";
}elseif (isset($var1)) {
  echo "Var1 is set <br>";
}


//empty() 
//$var2 is empty, so condition is True
$var2 = "";
if (empty($var2)) {
  echo "Var2 is empty <br>";
}

//is_null() 
$var3 = NULL;
if (is_null($var3)) {
var_dump(is_null($var3));
}

$var4;
if (is_null($var4)) {
  echo "<br>Var4 is considered NULL because the variable has not been set to any value";
}
?>
