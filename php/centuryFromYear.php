<?php
/**
 * Given a year, return the century it is in. The first century spans from
 * the year 1 up to and including the year 100, the second - from the year 101
 * up to and including the year 200, etc.
 */
function centuryFromYear($year) {
    return ceil($year / 100);
}

$result = centuryFromYear(1905);
print_r($result);
