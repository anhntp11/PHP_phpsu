<?php
// 29.Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
function findSquareNumbers($a, $b){
    $squareNumber = [];
    for($i = $a; $i <= $b; $i++) {
        $sqrt = sqrt($i);
        if($sqrt == floor($sqrt)) {
            $squareNumber[] = $i;
        }
    }
    return $squareNumber;
}

$a = 12;
$b = 122;

$result = findSquareNumbers($a, $b);

if (empty($result)) {
    echo "No Square exists from $a to $b";
} else {
    echo "Square from $a to $b: " . implode(", ", $result);
}

echo "<br>";


?>