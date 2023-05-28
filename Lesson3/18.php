<?php
// 18.Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
function countOccurrences($array, $element) {
    $count = 0;
    for($i = 0; $i < count($array); $i++) {
        if($array[$i] == $element) {
            $count++;
        }
    }
    return [$count, $element];
}

$result = countOccurrences(["s","o","m","e","o","n","e","l","o","v","e","m","e"], "o");
echo "\"$result[1]\"". " existed " . $result[0] . " times"; 
echo "<br>";


?>