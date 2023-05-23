<?php
function isValidEmail($string) {
    return filter_var($string, FILTER_VALIDATE_EMAIL) !== false;
}
var_dump(isValidEmail("phuonganhnt811@gmail.com"));
?>