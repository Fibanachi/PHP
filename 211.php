<?php

function hasElem($arr){
    foreach ($arr as $elem){
        if ($elem == 'c'){
            return true;
        }
    }
    return false;
}


$arr = ['a', 'd', 'g', 'd', 'g'];
var_dump(hasElem($arr));