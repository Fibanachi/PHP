Дана строка 'html css php'.
Вырежьте из нее и выведите на экран
слово 'html', слово 'css' и слово 'php'
<?php
$arr = 'html css php';
echo substr($arr, 0, 4);
echo substr($arr, 5,3);
echo substr($arr, 9, 3);