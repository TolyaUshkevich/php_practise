<?php
function cleaningNumber($number) {
    for($i = 0; $i != strlen($number); $i++) {
        if (is_integer($number) == false) {
            // очищает строку от НЕ чисел
            substr_replace($number, '', $i);
        }
    }
    return $number;
}

echo cleaningNumber(readline());