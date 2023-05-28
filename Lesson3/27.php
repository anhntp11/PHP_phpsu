<?php
// 27.Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
function maxNegativeInteger($array) {
    $max = null;
    $checkNegativeInteger = false;
    foreach ($array as $element){
        if($element < 0 && is_numeric($element)){
            if($element > $max){
                $max = $element;
                $checkNegativeInteger = true;
            }
        } 
    }
    return $max;
}
$array = ["o","A", -1, -11, -15, 20];
$result = maxNegativeInteger($array);
if ($result === null) {
    echo "No Integers exists";
} else {
    echo "Maximum Negative Integer: " . $result;
}
echo "<br>";


?>