<?php
$arr = [1, 2, 3, 4, 5];

last($arr);

function last($arr)
{
    echo array_pop($arr).'<br>'; //выводим последний элемент массива

    if(!empty($arr)) {
        last($arr); //это рекурсия
    }
}
?>