Дан массив с элементами '<b>php</b>', '<i>html</i>'.
Создайте новый массив, в котором
из элементов будут удалены теги

<?php
$arr = ['<b>php</b>', '<i>html</i>'];
$result = array_map('strip_tags', $arr);
print_r ($result);