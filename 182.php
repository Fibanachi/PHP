Дан массив с элементами 'a', 'b', 'c'.
Сделайте из него массив с элементами
'a', 'b', 'c', '-', '-', '-'.

<?php
$arr = range('a', 'c');
print_r (array_pad($arr,6,'-'));