<?php
// 17.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
function checkPalindrome($string){
    if(strrev($string) == $string) {
        echo "$string is Palindrome";
    } else {
        echo "$string is not Palindrome";
    }
}
checkPalindrome("abcba");
echo "<br>";


?>