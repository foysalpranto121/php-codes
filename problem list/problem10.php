<?php
function checkPalindrome($word) {
    $lowerWord = strtolower($word);
    $reversed = strrev($lowerWord);
    if ($lowerWord == $reversed) {
        echo "\"$word\" is a palindrome.";
    } else {
        echo "\"$word\" is not a palindrome.";
    }
}

checkPalindrome("Racecar");
?>
