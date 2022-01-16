<?php
$file = new SplFileObject('php_samples/data/items.csv');

$items = [];
// while (!$file->eof()) {
//     $items[] = $file->fgetcsv();
// }

$file->setFlags(SplFileObject::READ_CSV);
foreach ($file as $item) {
    $items[] = $item;
}
array_pop($items);
echo "\n";

print_r($items);
