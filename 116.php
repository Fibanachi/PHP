Дана строка. Проверьте, что
она начинается на 'http://'.
Если это так, выведите 'да',
если не так - 'нет'
<?php
$str = '1http://asdfasfasf';
if (substr($str,0, 7) == 'http://'){
    echo 'Yes';
} else{
    echo 'No';
}
