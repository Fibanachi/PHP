Составьте массив дней недели.
С помощью цикла foreach выведите все дни недели,
а выходные дни выведите жирным
<?php
$arr = ['mn', 'tu', 'wn', 'th', 'fr', 'st', 'sn'];
foreach ($arr as $day=>$elem){
    if ($day == 5 || $day == 6){
    echo $elem.'_bold ';
    } else {
    echo $elem.' ';
    }

}