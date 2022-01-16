<?php
$number = 10;

$numeric = is_numeric($number);

if ($numeric) {
    echo '数字です。';
} else {
    echo '数字ではありません。';
}
