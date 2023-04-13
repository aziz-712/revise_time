<?php
  function &func(){
      static $static = 0;
      $static++;
      return $static;
  }

  $var1 =& func();
  echo "var1:", $var1, "</br>"; // 1
  func();
  func();
  echo "var1:", $var1, "</br>"; // 3
  $var2 = func(); // assignment without the &
  echo "var2:", $var2, "</br>"; // 4
  func();
  func();
  echo "var1:", $var1, "</br>"; // 6
  echo "var2:", $var2, "</br>"; // still 4
