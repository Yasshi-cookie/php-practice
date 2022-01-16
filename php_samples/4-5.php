<?php
// $color = [
//     '黒',
//     '赤',
//     '白',
// ];

// // 参照渡し（リファレンス渡し）
// array_shift($color);
// print_r($color);

// $price = 10000;
// // 値渡し
// $new_price = number_format($price);
// echo $price;
// echo "\n";
// echo $new_price;
// echo "\n";

// $color = [
//     '黒',
//     '赤',
//     '白',
// ];

// add_head($color);
// print_r($color);

// /**
//  * 配列の戦闘に文字をつなげる
//  */
// function add_head(&$target)
// {
//     for ($i = 0; $i < count($target); $i++) {
//         $target[$i]= '・' . $target[$i];
//     }
// }

$a = 1;
$b = add_num($a);
echo $a;
echo "\n";
echo $b;
echo "\n";

function add_num($number)
{
    $number += 1;
    return $number;
}
