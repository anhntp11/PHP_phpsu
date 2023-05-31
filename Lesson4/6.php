<?php
// 6. Sử dụng For each để in $nam = array(1990, 1991, 1992, 1993, 1994, 1995)

function printYearInArray($arr){
    $rs = "";
    foreach ($arr as &$n){
        $rs = $rs."$n ";
    }
    return $rs;
}
$nam = array(1990, 1991, 1992, 1993, 1994, 1995);
$result = printYearInArray($nam);
echo "$result";
echo "<br>";



?>