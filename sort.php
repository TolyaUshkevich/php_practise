<?php
function sortNumbers () {

    $countable = [];
    $uncountable = [];
    $file = fopen('text', 'r');
    $writeFile = fopen('write', 'w');
    while (!feof($file)) {
        $str = fgets($file);
        for ($i = 0; $i <= strlen($str); $i++) {
            $number = $str[$i];
            if (is_numeric($number)) {

                if ($number % 2 === 0) {
                    $countable[] = $number;
                } else {
                    $uncountable[] = $number;
                }
            }
        }
        }
    var_dump($countable);
    var_dump($uncountable);
    fclose($file);
    fwrite($writeFile, 'четные числа: ');
    foreach ($countable as $num) {
        fwrite($writeFile, $num . ' ');
    }
    fwrite($writeFile, "\n" . 'нечетные числа: ');
    foreach ($uncountable as $num) {
        fwrite($writeFile, $num . ' ');
    }
}


sortNumbers();
