Дана строка с цифрами, например, '12345'.
Проверьте, что первым символом этой строки
является цифра 1, 2 или 3. Если это так -
выведите 'да', в противном случае выведите 'нет'
<?php
$str = '52345';
if ($str[0] == 1 || $str[0] == 2 || $str[0] == 3){
    echo 'Right';
} else {
    echo 'Wrong';
}