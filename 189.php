Дан массив с элементами 1, 2, 3, 4, 5
и массив с элементами 3, 4, 5, 6, 7.
Запишите в новый массив элементы,
которые есть и в том, и в другом массиве

<?php
$arr = [1, 2, 3, 4, 5];
$arr1 = [3, 4, 5, 6, 7];

$result = array_intersect($arr, $arr1);
print_r ($result);
