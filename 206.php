<?php
function hello($name)
{
    $text = 'Hello, '.$name.'!';
    return $text;
}

$message = hello ('Dima');

echo $message;

echo hello('Vasya'.' '.hello('Petya').' '.hello('Kolya'));

