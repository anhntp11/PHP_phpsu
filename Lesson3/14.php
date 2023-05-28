<?php
// 14. Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
function findPosition($array, $element) {
    $position = [];
    for($i = 0; $i < count($array); $i++){
        if($array[$i] == $element) {
            $position[] = $i;
        }
    }
    return $position;
}

$position = findPosition(array(1, 1, 2, 3, 3, 4, 5, 5, 6, 7, 8, 8, 9), 5);
foreach($position as $eachPosition) {
    echo $eachPosition . " ";
}
echo "<br>";


?>