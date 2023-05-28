<?php
// 21.Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
function findSecondMax($array) {
    $max1 = -1;
    $max2 = -1;
    for($i = 0; $i < count($array); $i++){
        if($array[$i] > $max1){
            $max1 = $array[$i];
        }
        elseif($array[$i] > $max2){
            $max2 = $array[$i];
        }
    }
    if($max2 == -1){
        $max2 = $array[count($array) - 2];
    }
    return $max2;
}
$array = [1,2,3,4,5,6,7,9,8];
echo "Second Max: ";
echo findSecondMax($array);
echo "<br>";

?>