<?php
function delitingSpaces($equation)
{
    for ($i = 0; $i < strlen($equation); $i++) {
        if ($equation[$i] == ' ') {
            $equation = str_replace($equation[$i], '', $equation);
        }
    }
    return $equation;
}




function math($equation){
    $counter = 0;
    $a = '';
    $b = '';
    $c = '';
    $equation = delitingSpaces($equation);
    $factor = 1;
    for ($i = 0; $i < strlen($equation); $i++) {

        if ($counter == 0) {

            if ($equation[0] = '-') {
                $factor = -1;
            }
            if (is_numeric($equation[$i])) {
                $a = $a . $equation[$i];
            }
            if ($equation[$i + 4] == '-' || $equation == '+') {
                // + 4 becouse the rules says: first number must be written like number x*x
                $counter++;
            }
            $a = (int)$a * $factor;
        }

        if ($counter == 1) {
            $factor = 1;
            if ($equation[$i] == '-') {
                $factor = -1;
            }
            if (is_numeric($equation[$i])) {
                $b = $b . $equation[$i];
            }
            if (!is_numeric($equation[$i + 2])) {
                // + 3 becouse next eteration starts with firs x after first number
                $counter++;
            }
            $b = (int)$b * $factor;
        }

        if ($counter == 2) {
            $factor = 1;
            if ($equation[$i] = '-') {
                $factor = -1;
            }
            if (is_numeric($equation[$i])) {
                $c = $c . $equation[$i];
            }
            if (!is_numeric($equation[$i + 1])) {
                break;
            }
            $c = (int)$c * $factor;
        }
        return $a . "\n" . $b . "\n" . $c;
    }
}
echo "\n" . math('-1x*x   +5x-6 = 0');