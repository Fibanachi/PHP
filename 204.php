Заполните массив числами от 1 до 26 так,
чтобы ключами этих чисел были буквы
английского алфавита: ['a'=>1, 'b'=>2...]

<?php
$key = range(a,z);
$values = range (1, 26);
$arr = array_combine($key,$values);
print_r($arr);