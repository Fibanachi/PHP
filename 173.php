Дан массив с элементами 'a'=>1, 'b'=>2, 'c'=>3.
Выведите на экран случайный элемент данного массива

<?php
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
$key = array_rand($arr);
print_r ($arr[$key]);