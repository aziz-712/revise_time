<?php
function test()
{
    static $count = 0;
    global $tmp;
    $tmp = $count;
    $count++;
    echo $count . "</br>";
    if ($count < 10) {
        test();
    }
    $count--;
    $tmp = $count;
}
test();
echo "$tmp";
?>