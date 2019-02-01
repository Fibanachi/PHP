Дана строка. Проверьте,
что она заканчивается на
'.png' или на '.jpg'.
Если это так, выведите
'да', если не так - 'нет'
<?php
$str = 'sadflak.1jpg';
$check = substr($str, -4);
if ($check == '.jpg' || $check == '.png'){
    echo 'Yes';
} else {
    echo 'No';
}