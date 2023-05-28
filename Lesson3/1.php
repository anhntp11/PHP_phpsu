<?php
// 1. Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.
function checkEvenNum($var){
    if($var % 2 !== 0) {
        echo "Odd Number";
    } else {
        echo "Even Number";
    }
}

checkEvenNum(1511);
echo "<br>";

?>
