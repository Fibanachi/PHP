Дан массив с целыми числами. Создайте
из него новый массив, где останутся лежать
только четные из этих чисел. Для этого
используйте вспомогательную
функцию isEven из предыдущей задачи

<?php

$arr = $arr = [1, 2, 3, 8, 16, -1, -2, -3];
function isEven($num)
{
    return $num % 2 == 0;
}

$newArr = [];
foreach ($arr as $elem) {
    if (isEven($elem)) {
        $newArr[] = $elem;
    }
}
var_dump($newArr);