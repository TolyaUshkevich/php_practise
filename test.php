<?php
function I($string_1, $string_2) {
    $counter = 0;
    for($i = 0; $i <= strlen($string_1); $i++){
        echo $string_1[$i] . $string_2[$i] . "\n";
        if ($string_1[$i] != $string_2[$i]){
            echo $string_1[$i] . $string_2[$i] . "\n";
            $counter++;
            }
    return $counter;
    }
}

echo I('1010', '0110');