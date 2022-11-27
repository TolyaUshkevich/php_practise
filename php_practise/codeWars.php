<?php
function inArray($array1, $array2) {
    $result = [];
    $counter = 0;
    $counter2 = 0;
    foreach ($array2 as $check){
        $check = str_split($check);
        foreach ($check as $letter){
            $string = $array1[$counter2];
            if ($string[$counter] == $letter){
                $counter++;
            }
        }
        if ($counter == strlen($array1[$counter2])){
            $result[] = $array1[$counter2];
            $counter2++;
        }
    }
    return $result;
}



var_dump(inArray(["arp", "live", "strong"], ["lively", "alive", "harp", "sharp", "armstrong"]));