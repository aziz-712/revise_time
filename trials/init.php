<?php

function init(NULL &$var, string $type) : void {
    // echo "gettype($var) = " . gettype($var);
    if ($type == "boolean"):
        $var = FALSE;
    elseif ($type == "integer"):
        $var = 0;
    elseif ($type == "double"):
        $var = 0.0;
    elseif ($type == "string"):
        $var = "";
    elseif ($type == "array"):
        $var = array();
    endif;
}

// init($bar, "integer");
// echo $bar;
// echo "</br> gettype($bar) = " . gettype($bar);