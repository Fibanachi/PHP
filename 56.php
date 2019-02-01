Если переменная $a НЕ существует,
то выведите 'Верно', иначе выведите 'Неверно'.
<?php
$a = 4;
if (!isset($a)){
    echo "Wright \n";
} else {
    echo "Wrong \n";
}
$a = null;
if (!isset($a)){
    echo "Wright \n";
} else {
    echo "Wrong \n";
}