Создайте строку из 6-ти случайных
маленьких латинских букв так,
чтобы буквы не повторялись. Нужно
сделать так, чтобы в нашей строке могла
быть любая латинская буква, а не ограниченный набор
<?php
$str = 'qwertyuiopasdfghjklzxcvbnm';
$newStr = str_shuffle($str);
echo substr($newStr, 0, 6);