Дано число, например 31. Проверьте, что
это число не делится ни на одно другое
число кроме себя самого и единицы. То есть
в нашем случае нужно проверить,
что число 31 не делится на все числа от 2 до 30.
Если число не делится - выведите 'нет', а если
делится - выведите 'да'

<?php
$num = 7;

$arr = range (2,$num -1 );
$flag = false;
foreach ($arr as $elem) {
    if ($num % $elem == 0) {
        $flag = true;
        break;
    }
}

if ($flag == true){
    echo 'Yes';
} else {
    echo 'No';
}
