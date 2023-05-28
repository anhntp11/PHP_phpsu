<?php
// 30.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
function checkSubstringInString($string, $subString){
    $position = strpos($string, $subString);
    if($position !== false) {
        return true;
    } else {
        return false;
    }
}

$string = "Hello, my name is PA, I am student of TMU...";
$subString = "I am student";
$result = checkSubstringInString($string, $subString);
if($result !== false) {
    echo "String \"$string\" contains \"$subString\"";
} else {
    echo "String \"$string\" not contains \"$subString\"";
}



?>