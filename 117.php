Дана строка. Проверьте, что она начинается
на 'http://' или на 'https://'.
Если это так, выведите 'да', если не так - 'нет'.
<?php
$str = 'ht1tps://';
if (substr($str, 0, 7) == 'http://' ||
    substr($str, 0, 8) == 'https://'){
    echo 'Yes';
} else {
    echo 'No';
}