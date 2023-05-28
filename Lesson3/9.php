<?php
// 9. Viết chương trình PHP để tính tổng của các số trong một mảng.
function sumArray($array){
    $sum = 0;
    for($i = 0;$i < count($array); $i++){
        $sum += $array[$i];
    }
    echo "Sum of array: $sum";
}

sumArray(array(15, 11, 20, 8, 1, 4));
echo "<br>";


?>