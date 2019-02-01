Дан массив [1, 2, 3, 4, 5]. С помощью функции
array_splice запишите в новый массив элементы
[2, 3, 4]

<?php
$arr = [1, 2, 3, 4, 5];
$newArr = array_splice($arr, 1, 3);
print_r ($newArr);