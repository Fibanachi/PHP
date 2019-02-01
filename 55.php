Если переменная $a существует,
то выведите 'Верно', иначе выведите
'Неверно'. Проверьте работу скрипта при $a, равном 3 и null
<?php
$a = 3;
if (isset($a)){
    echo "Wright \n";
} else {
    echo "Wrong \n";
}
$a = null;
if (isset($a)){
    echo "Wright \n";
} else {
    echo "Wrong \n";
}