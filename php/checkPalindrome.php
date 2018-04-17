<?php
/**
 * Given the string, check if it is a palindrome.
 */
function checkPalindrome($inputString) {
    return strrev($inputString) === $inputString;
}

$word = "aabaa";
$result = checkPalindrome($word);
var_dump($result);
