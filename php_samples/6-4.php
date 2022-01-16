<?php
$items = simplexml_load_file('php_samples/data/items.xml');

foreach ($items as $item) {
    echo $item->name . ' / ' . $item->price . "\n";
}

$add_el = $items->addChild('item');
$add_el->addChild('name', 'Go入門');
$add_el->addChild('price', '3000');

$items->asXML('php_samples/data/items.xml');

echo "\n";
