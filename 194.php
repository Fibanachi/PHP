Дан массив с элементами 1, 2, 4, 5, 5.
Найдите второй по величине элемент

<?php
$arr = [1, 2, 4, 5, 5];
$newArr = array_unique($arr);
rsort($newArr);
print_r($newArr[1]);
