<?php
/**
 * Given the string, check if it is a palindrome.
 */
function checkPalindrome($inputString) {

    if (strrev($inputString) === $inputString) {
        return true;
    }

    return false;

}

$word = "hlbeeykoqqqqokyeeblh";
$result = checkPalindrome($word);
var_dump($result);
