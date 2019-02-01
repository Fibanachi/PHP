Создайте массив ['a'=>1, 'b'=2... 'z'=>26] не используя цикл

<?php
$keys = range('a','z');
$values = range (1,26);

$arr = array_combine($keys, $values);
print_r ($arr);