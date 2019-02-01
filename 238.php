Сделайте функцию getDivisors,
которая параметром принимает число
и возвращает массив его
делителей (чисел, на которое делится данное число)

<?php

function getDivisors($num)
{
    $arr = [];
    for ($i = 1; $i <= $num; $i++){
        if ($num % $i == 0){
            $arr[] = $i;
        }
    }
    return $arr;
}

var_dump(getDivisors(20));