Дана строка '1234567890'.
Сделайте из нее строку '12-34-56-78-90'
не используя цикл
<?php
echo implode('-', str_split('1234567890',2));