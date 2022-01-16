<?php
class Item
{
    // 商品の名前
    public string $name;
    // 商品の価格
    public int $price;
}

// // PHP入門
// $php_basic = new Item();
// $php_basic->name = 'PHP入門';
// $php_basic->price = 1500;

// echo $php_basic->name . '/' . $php_basic->price;

// JS入門
$js_basic = new Item();
$js_basic->name = 'JS入門';
$js_basic->price = 2300;
// $js_basic->review = 4;

echo $js_basic->name . '/' . $js_basic->price;

echo "\n";
