Если переменная $a больше нуля и меньше 5-ти,
то выведите 'Верно', иначе выведите 'Неверно'.
Проверьте работу скрипта при $a, равном 5, 0, -3, 2
<?php
$a = 5;
if ($a > 0 && $a < 5){
    echo "Wright \n";
} else {
    echo "Wrong \n";
}
$a = 0;
if ($a > 0 && $a < 5){
    echo "Wright \n";
} else {
    echo "Wrong \n";
}
$a = -3;
if ($a > 0 && $a < 5){
    echo "Wright \n";
} else {
    echo "Wrong \n";
}
$a = 2;
if ($a > 0 && $a < 5){
    echo "Wright \n";
} else {
    echo "Wrong \n";
}