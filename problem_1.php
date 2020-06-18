<?php

function sum($value){
    $arr = [];
    for($i=$value; $i>1; $i--){
        if(($i % 5 == 0) || ($i % 3 == 0) && (in_array($i, $arr) == false)) {
            array_push($arr, $i);
        }
    }
    return array_sum($arr);
}
print sum(999);
