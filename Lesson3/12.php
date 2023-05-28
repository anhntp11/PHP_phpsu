<?php
// 12.Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
function insertElement($array,$element,$position){
    $array[] = 0;
    for($i = count($array) - 1; $i > $position - 1 ; $i--){
        $array[$i] = $array[$i - 1];
    }
    $array[$position - 1] = $element; 
    return $array;

}
$newArray = insertElement(array(1, 2, 3, 4, 5), 11, 4);

foreach($newArray as $eachElement){
    echo $eachElement . " ";
}
echo "<br>";

?>