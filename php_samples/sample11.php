<?php
echo '足される数 >';
$added_number = trim(fgets(STDIN));
echo '足す数 >';
$add_number = trim(fgets(STDIN));

$result = $added_number + $add_number;

echo <<< EOT
$added_number + $add_number = $result
答えは $result です。\n
EOT;
