Создайте многомерный массив $arr.
С его помощью выведите на экран слова
'joomla', 'drupal', 'зеленый', 'красный'.

$arr = [
'cms'=>['joomla', 'wordpress', 'drupal'],
'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
];

<?php
$arr = [
        'cms'=>['joomla', 'wordpress', 'drupal'],
    'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
];
echo $arr['cms'][0];
echo $arr['cms'][2];
echo $arr['colors']['green'];
echo $arr['colors']['red'];


