<?php

$myName   = "Aziz";
$userName = &$myName;  // we create a reference of &myName called $userName

$userName = "aziz-712";
echo $myName; // output : "aziz-712"

/**
 * $myName and $userName , both point to the same value in the heap
 */