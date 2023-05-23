<?php
function joinArray($array, $glue) {
    return implode($glue, $array);
}
echo joinArray(array("Hello", "Hi", "Bye"), ", ");
?>