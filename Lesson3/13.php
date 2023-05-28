<?php
// 13. Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
function removeSameElement($array){
    return array_unique($array, SORT_NUMERIC);
}
$newArray = removeSameElement(array(1, 1, 2, 3, 3, 4, 5, 5, 6, 7, 8, 8, 9));

foreach($newArray as $eachElement){
    echo $eachElement . " ";
}
echo "<br>";



?>