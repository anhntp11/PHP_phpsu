<?php
// 4. Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.
function checkContainedString($string, $subString) {
    $pos = strpos($string, $subString);
    if($pos !==false) {
        echo "String \"$string\" contains \"$subString\"";
    } else {
        echo "String \"$string\" not contains \"$subString\"";
    }
}

checkContainedString("Hello I'm PA", "PB");
echo <br>;

?>