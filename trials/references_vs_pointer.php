<?php
// $bar = "Ahmed";
function foo(&$var)
{
  echo 'This is $var before new assignment:';
  echo "$var</br>";
  // $var = "Aziz";
  $myname = "Aziz";
  $var = &$myname;
  // $var =& $GLOBALS["baz"];
  // print_r($GLOBALS);
  // foreach ($GLOBALS as $GLOBAL_VAR) {
  //     print_r($GLOBAL_VAR);
  //     echo "</br>";
  // }
  // echo "</br>";
  // echo $GLOBALS["baz"] . "</br>";
  // echo &$var; this doesn't exit
  echo 'This is $var after new assignment:';
  echo "$var</br>";
}
foo($bar); 

if (isset($bar)):
  echo '$bar exits.';
  echo '$bar contains ' . $bar;
else:
  echo '$bar does not exit';
endif;

echo "</br>";

if (isset($var)):
  echo '$var exits';
else:
  echo '$var does not exit';
endif;
?>