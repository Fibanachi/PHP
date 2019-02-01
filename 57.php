Если переменная $var равна true,
то выведите 'Верно', иначе выведите 'Неверно'.
Проверьте работу скрипта при $var, равном true, false.
Напишите два варианта скрипта - с короткой записью и с длинной
<?php
$var = true;
if ($var){
    echo "Wright \n";
} else{
    echo "Wrong \n";
}
$var = false;
if ($var){
    echo "Wright \n";
} else{
    echo "Wrong \n";
}
$var = false;
if ($var == true){
    echo "Wright \n";
} else{
    echo "Wrong \n";
}