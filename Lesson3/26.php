<?php
// 26.Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
function maxPositiveInteger($array) {
    $max = null;
    $checkPositiveInteger = false;
    foreach ($array as $element){
        if($element > 0 && is_numeric($element)){
            if($element > $max){
                $max = $element;
                $checkPositiveInteger = true;
            }
        } 
    }
    return $max;
}
$array = ["o","A", -1, 11, 15, 20];
$result = maxPositiveInteger($array);
if ($result === null) {
    echo "No Integers exists";
} else {
    echo "Maximum Positve Integer: " . $result;
}
echo "<br>";


?>