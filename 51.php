Если переменная $a равна 'test',
то выведите 'Верно', иначе выведите
'Неверно'. Проверьте работу скрипта
при $a, равном 'test', 'тест', 3
<?php
$a = 'test';
if ($a == 'test'){
    echo "Wright \n";
} else {
    echo "Wrong \n";
}
$a = 'тест';
if ($a == 'test'){
    echo "Wright \n";
} else {
    echo "Wrong \n";
}
$a = '1';
if ($a == 'test'){
    echo "Wright \n";
} else {
    echo "Wrong \n";
}