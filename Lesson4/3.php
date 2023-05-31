<?php
// 3. Kiểm tra năm chẵn lẻ
function checkYear(){
    $curr_year = date("Y");
    if ($curr_year % 2 != 0){
        return "Odd year";
    }
    else{
        return "Even year";
    }
}

$result = checkYear();
echo "$result";
echo "<br>";

?>
