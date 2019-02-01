Если переменная $a равна '1'
и по значению и по типу, то выведите
'Верно', иначе выведите 'Неверно'.
Проверьте работу скрипта при $a, равном '1', 1, 3
<?php
$a = '1';
if ($a === '1'){
    echo "Wright \n";
} else {
    echo "Wrong \n";
}
$a = 1;
if ($a === '1'){
    echo "Wright \n";
} else {
    echo "Wrong \n";
}
$a = 3;
if ($a === '1'){
    echo "Wright \n";
} else {
    echo "Wrong \n";
}