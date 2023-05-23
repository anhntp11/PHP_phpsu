<?php
function padString($string, $pad_length, $pad_string, $pad_type) {
    return str_pad($string, $pad_length, $pad_string, $pad_type);
}

echo padString("Hello, World!", 20, "*ab", STR_PAD_BOTH);

?>