<?php
$items = [
    [
        'PHP入門',
        1500,
    ],
    [
        'JS入門',
        2300,
    ],
    [
        'Python入門',
        2000,
    ],
];

$file = new SplFileObject('php_samples/data/items.csv', 'w');
foreach ($items as $item) {
    $file->fputcsv($item);
}
