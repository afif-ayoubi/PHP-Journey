<?php
function extractAndSortNumbers($string) {
    $chars = str_split($string);
    
    $numbers = [];
    
    foreach ($chars as $char) {
        if (is_numeric($char)) {
            $numbers[] = intval($char);
        }
    }
    
    $sortedNumbers = manualSort($numbers);
    
    return $sortedNumbers;
}

function manualSort($arr) {
    $length = count($arr);
    
    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = 0; $j < $length - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    
    return $arr;
}



?>