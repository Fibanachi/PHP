
Дан массив [1, 2, 3, 4, 5]. С помощью
функции array_splice преобразуйте массив в [1, 4, 5]
<?php
$arr = [1, 2, 3, 4, 5];
array_splice($arr, 1,2);
var_dump($arr);
