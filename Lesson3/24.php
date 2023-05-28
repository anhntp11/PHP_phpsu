<?php
// 24.Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
function maxOddNumber($array){
    $oddNumberArray = [];
    foreach($array as $element){
        if($element % 2 !== 0){
            $oddNumberArray[] = $element;
        }
    }
    $max = max($oddNumberArray);
    return $max;
}

$array = [1,2,3,4,4,100,99,12];
echo "Maximum Odd Number: ";
echo maxOddNumber($array);
echo "<br>";

?>