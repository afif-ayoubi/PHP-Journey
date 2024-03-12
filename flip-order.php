<?php
function reverseDigits($number) {
    $reversed = 0;

    $sign = ($number < 0) ? -1 : 1;
    $number = abs($number);

    while ($number > 0) {
        $digit = $number % 10;

        $reversed = $reversed * 10 + $digit;

        $number = (int)($number / 10);
    }

    return $reversed * $sign;
}
?>