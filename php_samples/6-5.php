<?php
// $items = [
//     [
//         'name' => 'PHP入門',
//         'price' => 1500
//     ],
//     [
//         'name' => 'JS入門',
//         'price' => 2000
//     ],
//     [
//         'name' => 'Python入門',
//         'price' => 1800
//     ]
// ];

// $json = json_encode($items, JSON_UNESCAPED_UNICODE);
// file_put_contents('php_samples/data/items.json', $json);

// JSONの読み込み
$json = file_get_contents('php_samples/data/items.json');
$items = json_decode($json);
print_r($items);

echo "\n";
