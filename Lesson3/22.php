<?php
// 22.Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
function  greatestCommonDivisor($number1, $number2){
    $GCD = 1;
    $min = min($number1, $number2);
    for($i = 1; $i <= $min ;$i++){
        if($number1 % $i == 0 && $number2 % $i == 0){
            $GCD = $i;
        }
    }
    return $GCD;
}

function  leastCommonMultiple($number1, $number2){
    $GCD = greatestCommonDivisor($number1, $number2);
    $LCM = ($number1 * $number2)/$GCD;
    return $LCM;
}


$number1 = 15;
$number2 = 25;

$GCD = greatestCommonDivisor($number1,$number2);
$LCM = leastCommonMultiple($number1,$number2);


echo "GCD: $GCD <br>";
echo "LCM: $LCM";
echo "<br>";



?>