Дан массив 'a'=>1, 'b'=>2, 'c'=>3'.
Запишите в массив
$keys ключи из этого массива,
а в $values – значения

<?php
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
$keys = array_keys($arr);
$values = array_values($arr);
print_r ($keys);
print_r ($values);
