Дана строка. Сделайте заглавным
последний символ этой строки не используя цикл

<?php
$str = 'sdflksdfh';
$str = strrev($str);
$str = ucfirst($str);
$str = strrev($str);
print_r($str);