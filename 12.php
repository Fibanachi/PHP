Создайте переменную $text
и присвойте ей значение 'abcde'.
Обращаясь к отдельным символам этой
строки выведите на
экран символ 'a', символ 'c', символ 'e'
<?php
$text = 'abcde';
echo $text[0];
echo $text[2];
echo $text[4];
echo "\n".$text[0].$text[2].$text[4];