<?php
// 23.Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
function perfectNumber($number){
    $array = [];
    for($i = 1; $i < $number; $i++){
        if($number % $i == 0) {
            $array[] = $i;
        }
    }
    $sum = array_sum($array);
    if($sum == $number){
        return $number;
    } else {
        return false;
    }
}

$number = 6;
$result = perfectNumber($number);

if($result !== false){
    echo "$number is perfect number.";
} else {
    echo "$number is not perfect number.";
}
echo "<br>";


?>