<?php
function nextBigger($n) {
    $number = str_split(strval($n));
    $result = 0;
    $count = 0;
    while ($result == 0) {
        $n++;
        if (array_diff(str_split(strval($n)), $number) == null) {
            echo 1;
            $result++;
            $numberCheck = array_count_values($number);
            $n2 = str_split(strval($n));
            var_dump($number);
            $nCheck = array_count_values($n2);
            for ($i = 0; $i <= count($numberCheck); $i++) {
                var_dump($nCheck[$n2[$i]]);
                var_dump($numberCheck[$number[$i]]);
                var_dump($n2);
                if ($nCheck[$n2[$i]] == $numberCheck[$number[$i]]) {
                    $count++;
                }
            }
            if ($count == count($n2)) {
                return $n;
            }
            else{
                $result = 0;
            }
            die;
        }

    }
}


var_dump(nextBigger(2024));