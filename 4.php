<?php
function findSubstring($string, $substring) {
    return strpos($string, $substring);
}



echo findSubstring("Hello, My name is PA! How are you?", "is"); 


?>