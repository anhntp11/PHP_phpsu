<?php
// 10. Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.
function findFibo($a, $b){
    $array = [0,1];
    $i = 2;
    while(1){
        $array[$i] = $array[$i-1] + $array[$i-2];
        if($array[$i] > $b){
            break;
        }
        $i++;
    }
    for($i = 0; $i < count($array); $i++){
        if($array[$i] > $a && $array[$i] <= $b){
            echo $array[$i] . " ";
        }
    }
}
findFibo(1,100);
echo "<br>";

?>