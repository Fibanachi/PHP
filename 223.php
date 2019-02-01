Нарисуйте пирамиду, как показано на рисунке,
воспользовавшись циклом for:
xx
xxxx
xxxxxx
xxxxxxxx
xxxxxxxxxx

<?php

$str = '';
for ($i = 1; $i <= 5; $i++){

    $str .= 'xx';
    echo $str . PHP_EOL;
}