<?php
class Item
{
    public string $name;
}

$item01 = new Item();
$item01->name = 'PHP入門';

$item02 = $item01;

$item01->name = 'JS入門';
echo $item02->name;

echo "\n";
