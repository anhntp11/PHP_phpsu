<?php
// 19.Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
function sortArrayDesc($array){
    echo "Sorted Array: ";
    rsort($array);
    foreach ($array as $var) {
        echo "$var, ";
    }
}

sortArrayDesc([1, 2, 3, 4, 6, 5, 2]);
echo "<br>";

?>