<?php
// 20.Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
function insertToBeginning($array, $element){
    array_unshift($array, $element);
    return $array;
}

function insertToEnd($array, $element){
    array_push($array, $element);
    return $array;
}


$array = [1,2,3,4,5,6,7];

$newArray = insertToBeginning($array, 11);
foreach($newArray as $element){
    echo $element . " ";
}
echo "<br>";


$newArray = insertToEnd($array, 15);
foreach($newArray as $element){
    echo $element . " ";
}

echo "<br>";

?>