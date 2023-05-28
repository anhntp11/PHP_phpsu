<?php
// 8. Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
function findPrime($a, $b){
    for($i = $a; $i <= $b; $i++){
        $check = 0;
        for($j = 2; $j * $j <= $i; $j++){
            if($i % $j == 0){
                $check = 1;
                break;
            } 
        }
        if($check === 0) {
            echo "$i";
            echo "<br>";
        }
        
    }
}

findPrime(5,100);
echo "<br>";



?>