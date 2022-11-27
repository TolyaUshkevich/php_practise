<?php
$a = ["asd", "arp", "live", "strong",];
$b = ["lively", "alive", "harp", "sharp"];
$counter = 0;
$result = [];
for ($i = 0; $i < count($b); $i++){
    $c = str_contains($b[$i], $a[$counter]);
    if ($c){
        $result[] = $a[$counter];
        if ($i == count($b)){
            break;
        }
        echo $i . "\n";
        $counter++;
        $i = 0;
    }
    if ($i == count($b) - 1 and !$c){
        if ($counter == count($a)){
            break;
        }
       $counter++;
        $i = 0;
    }
}
var_dump($result);
