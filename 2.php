<?php
function countWords($string) {
    return str_word_count($string);
}


echo countWords("Hello my friend");

?>