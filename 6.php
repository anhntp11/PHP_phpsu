<?php
function checkSubstringAtStart($string, $substring) {
    return strncmp($string, $substring, strlen($substring)) == 0;
}
echo checkSubstringAtStart("Hello my friend!", "Hello");
?>