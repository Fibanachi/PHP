Если переменная $a пустая, то выведите 'Верно',
иначе выведите 'Неверно'.
Проверьте работу скрипта при $a,
равном 1, 3, -3, 0, null, true, '', '0'.
<?php
$a = false;
if (empty($a)){
    echo "Wright \n";
} else {
   echo "Wrong \n";

}$a = 3;
if (empty($a)){
    echo "Wright \n";
} else {
   echo "Wrong \n";

}$a = -3;
if (empty($a)){
    echo "Wright \n";
} else {
   echo "Wrong \n";

}$a = 0;
if (empty($a)){
    echo "Wright \n";
} else {
   echo "Wrong \n";

}$a = null;
if (empty($a)){
    echo "Wright \n";
} else {
   echo "Wrong \n";

}$a = true;
if (empty($a)){
    echo "Wright true \n";
} else {
   echo "Wrong true \n";

}$a = '';
if (empty($a)){
    echo "Wright \n";
} else {
   echo "Wrong \n";

}$a = '0';
if (empty($a)){
    echo "Wright \n";
} else {
   echo "Wrong \n";

}