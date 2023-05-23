<?php
function splitString($string, $delimiter) {
    return explode($delimiter, $string);
}

print_r(splitString("Hello,Hi,Bye", ","));
?>