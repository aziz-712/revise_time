<?php
class foo {
    public $value = 42;

    public function &getValue() {
        return $this->value;
    }
}

$obj = new foo;
$myValue = &$obj->getValue(); // $myValue is a reference to $obj->value, which is 42.
$obj->value = 2;
echo "This is myvalue after changing the object value : $myValue </br>";
// prints the new value of $obj->value, i.e. 2.
$myValue++;
echo "This is the object value after changing myvalue : $obj->value";
// prints the new value of $obj->value, i.e. 2.
