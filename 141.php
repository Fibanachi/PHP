Проверьте, является ли слово
палиндромом (одинаково читается
во всех направлениях, примеры
таких слов: madam, otto, kayak, nun, level).
<?php
$str = 'madam1';
$strRev = strrev($str);
if ($str == $strRev){
    echo 'Yes';
}else{
    echo 'No';
}