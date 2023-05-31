<?php
//5. viết chương trình PHP, in ra số từ 1 đến 100 sao cho số chẵn là in đậm, số lẻ in thường

function printOddEvenInRange($a, $b){
    $rs = "";
    for ($i = $a; $i <= $b; $i++){
        if ($i % 2 == 0) {
            $s = '<strong>' . $i . '</strong> ';
        } else {
            $s = $i . ' ';
        }
        $rs = $rs.$s;
    }
    return $rs;
}

$result = printOddEvenInRange(1, 100);
echo "$result";
echo "<br>";

?>