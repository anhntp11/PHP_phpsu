<?php
// 11. Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
function isAmstrongNumber($number) {
    $array = [];
    $newNum = $number;
    for($i = 0; $i < strlen($newNum); $i++) {
        $array[$i] = $newNum % 10;
        $newNum /= 10;
    }
    $sum = 0;
    foreach($array as $eachNumber) {
        $sum += pow($eachNumber,strlen($number));
    }
    if($sum == $number) {
        echo "$number is amstrong number";
    } else {
        echo "$number is not amstrong number";
    } 
}

isAmstrongNumber(1511);
echo "<br>";

?>