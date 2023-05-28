<?php
// 2. Viết chương trình PHP để tính tổng của các số từ 1 đến n.
function sum1toN($n) {
    $sum = 0;
    for ($i = 0; $i <= $n; $i++) {
        $sum += $i;
    }
    echo "Sum from 1 to $n: $sum";
}

sum1toN(11);
echo "<br>";

?>