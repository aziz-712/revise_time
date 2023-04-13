<?php
  echo('is_scalar() test:'."</br>");
  echo("&nbsp;NULL   : " . print_R(is_scalar(NULL),    true) . "</br>");
  echo("&nbsp;false  : " . print_R(is_scalar(false),   true) . "</br>");
  echo("&nbsp;(empty): " . print_R(is_scalar(''),      true) . "</br>");
  echo("&nbsp;0      : " . print_R(is_scalar(0),       true) . "</br>");
  echo("&nbsp;'0'    : " . print_R(is_scalar('0'),     true) . "</br>");
