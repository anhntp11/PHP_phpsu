<?php
// 25.Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
function isPrimeNumber($number){
    $check = 0;
    for($i = 2; $i * $i <= $number; $i++){
        if($number % $i == 0){
            $check = 1;
            break;
        }
    }
    if($check == 0) {
        echo "Prime number!";
    } else {
        echo "not Prime number!";
    }
}
$number = 29;
isPrimeNumber($number);
echo "<br>";



?>