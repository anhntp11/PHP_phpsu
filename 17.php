<?php
function containsSubstring($string, $substring) {
    return strstr($string, $substring) !== false;
}
var_dump(containsSubstring("Hello I'm PA", "llo"));

?>