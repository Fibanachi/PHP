Даны два массива:
['a', 'b', 'c'] и [1, 2, 3].
Создайте с их помощью массив
'a'=>1, 'b'=>2, 'c'=>3'

<?php
$arr1 =  ['a', 'b', 'c'];
$arr2 = [1, 2, 3];
$result = array_combine($arr1, $arr2);
print_r ($result);