Создайте двухмерный массив. Первые два ключа - это 'ru' и 'en'.
Пусть первый ключ содержит элемент, являющийся массивом названий
дней недели по-русски, а второй - по-английски.
Выведите с помощью этого массива понедельник по-русски
и среду по английски (пусть понедельник - это первый день).
<?php
$arr = [
        'ru'=>[1=>'пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'],
    'en'=>[1=>'mn', 'tu', 'wn', 'th', 'fr', 'st', 'sn']
];
echo $arr['ru'][1];
echo $arr['en'][3];