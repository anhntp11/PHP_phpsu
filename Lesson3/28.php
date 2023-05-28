<?php
// 28.Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
function sumOdd($number){
    $sumOdd = 0;
    for($i = 1; $i <= $number; $i++){
        if($i % 2 != 0){
            $sumOdd += $i;
        }
    }
    return $sumOdd;
}

$num = 15;
$result = sumOdd($num);
echo "Odd sum from $num is: $result";


?>