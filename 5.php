<?php
function replaceSubstring($string, $search, $replace) {
    return str_replace($search, $replace, $string);
}

echo replaceSubstring("my bad!", "my", "her"); // Outputs: Hello, PHP!


?>