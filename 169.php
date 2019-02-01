Дан массив ['a', '-', 'b', '-', 'c', '-', 'd']
. Найдите позицию первого элемента '-' и
удалите его с помощью функции array_splice

<?php
$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
$res = (array_search('-', $arr));
array_splice($arr, $res,1);
print_r ($arr);
