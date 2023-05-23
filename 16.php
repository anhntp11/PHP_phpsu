<?php
function endsWith($string, $substring) {
    $pos = strrchr($string, $substring);
    return ($pos && $pos == $substring);
}
var_dump(endsWith("Hello I'm PA", "PA"));
?>