Дан массив ['Привет, ', 'мир', '!'].
Необходимо записать в первый элемент
(то есть элемент с номером ноль) этого
массива слово 'Пока, '
(то есть вместо слова 'Привет, ' будет 'Пока, ').
<?php
$arr = ['Hello, ', 'world ', '!'];
$arr[0] = 'Good bye ';
echo $arr;
var_dump($arr);