<?php
// $today = time();
// $format_date = date('Y/m/d', $today);

// echo $format_date;

$today = new DateTime();
$today->setTimeZone(new DateTimeZone('Asia/Tokyo'));
$format_date = $today->format('Y/m/d');
echo $format_date;

echo "\n";
