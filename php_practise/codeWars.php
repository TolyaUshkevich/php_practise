<?php
function inArray($array1, $array2) {
    $result = [];
    $counter = 0;
    foreach ($array2 as $check){
        $string = $check;
        $check = array($check);
        foreach ($check as $letter){
            if ($array1[$counter] === $letter){
                $counter++;
            }
        }
        if ($counter == strlen($string)){
            $result[] = $check;
        }
    }
    return $result;
}



var_dump(inArray(['asd', 'wer'], ['asdf', 'wert']));