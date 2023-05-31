<?php
// 4. dùng For để in ra từ 1->100
function printNunberInRange($a, $b){
    $rs = "";
    for ($i = $a; $i <= $b; $i++){
        $rs = $rs."$i ";
    }
    return $rs;
}

$result = printNunberInRange(1, 100);
echo "$result";
echo "<br>";



?>