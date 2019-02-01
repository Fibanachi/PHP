Дан массив с числами. Запишите в новый массив
только те числа, которые больше нуля и меньше
10-ти. Для этого используйте
вспомогательную функцию isNumberInRange из предыдущей задачи.

<?php

$arr = [1, 3, 5, 6, 9, 11, 15, 30];

function isNumberInRange($num)
{
    return $num > 0 and $num < 10;
}


$newArr = [];

foreach ($arr as $elem){
    if (isNumberInRange($elem)){
        $newArr[] = $elem;
    }
}

var_dump($newArr);