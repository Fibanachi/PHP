Дан массив с элементами 1, 2, 3, 4, 5.
Добавьте ему в начало элемент 0,
а в конец - элемент 6

<?php
$arr = range(1, 5);
array_unshift($arr, 0);
array_push($arr, 6);
print_r ($arr);