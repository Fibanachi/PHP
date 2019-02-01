Дано число. Найдите
сумму цифр этого числа не используя цикл

<?php
$num = 12345;
$arr = str_split($num,1);
print_r (array_sum($arr));