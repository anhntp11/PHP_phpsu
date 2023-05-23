<?php
function replaceNonAlphanumeric($string, $replacement) {
    return preg_replace("/[^a-zA-Z0-9]/", $replacement, $string);
}
echo replaceNonAlphanumeric("llalalalalppep!#@!", "*");

?>