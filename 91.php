Даны переменные $a и $b.
Проверьте, что $a делится без остатка на $b.
Если это так - выведите 'Делится'
и результат деления, иначе выведите
'Делится с остатком' и остаток от деления.
<?php
$a = 10;
$b = 3;
if ($a % $b == 0){
    echo 'Делится';
} echo 'Делится с остатком';
