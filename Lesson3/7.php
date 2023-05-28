<?php
// 7. Viết chương trình PHP để tính giai thừa của một số nguyên dương.
function factorialCal($number) {
    $fact = 1;
    for($i = 2; $i <= $number; $i++) {
        $fact *= $i;
    }
    echo "Factorial of $number: $fact";
}

factorialCal(6);
echo "<br>";

?>