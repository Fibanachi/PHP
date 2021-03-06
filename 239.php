Сделайте функцию getCommonDivisors,
которая параметром принимает 2 числа,
а возвращает массив их общих делителей.
Для этого используйте
вспомогательную функцию getDivisors из предыдущей задачи

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

function getCommonDivisors($num1, $num2)
{
    return array_intersect(getDivisors($num1), getDivisors($num2));
}