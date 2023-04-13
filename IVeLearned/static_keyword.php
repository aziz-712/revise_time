<?php
/**
 * USE @static KEYWORD IN A FUNCTION
 * when you use the keyword @static in the declaration of a variable,
 * this variable's value will not be DELETED from the memory scope
 * after the function call is ended.
 */

// example without static
function &foo() {
  $var = 0;
  $var ++;
  return $var;
}

$x = &foo();
foo();
foo();
foo();
foo();
echo "This is x without static: $x </br>";
// output : This is x without static: 1

// same example with static
function &foo_with_static() {
  static $var = 0;
  $var ++;
  return $var;
}

$x = &foo_with_static();
foo_with_static();
foo_with_static();
foo_with_static();
foo_with_static();
echo "This is x with static: $x";
// output : This is x with static: 5
