<?php
// 6. Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
function sortArrayASC($array) {
    echo "Sorted Array: ";
    sort($array);
    foreach ($array as $var) {
        echo "$var ";
    }
}

sortArrayASC(array(15, 11, 20, 8, 1, 4, -20));
echo "<br>";


?>