Дана строка. Проверьте, что она заканчивается на '.png'.
Если это так, выведите 'да', если не так - 'нет'
<?php
$str = 'sadgsdf.png';
$check = substr($str, -4);
if ($check == '.png'){
    echo 'Yes';
} else {
    echo 'No';
}