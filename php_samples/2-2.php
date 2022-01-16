<?php
echo '数字を入力してください >';
$number = trim(fgets(STDIN));

// 10よりも大きいかを判断する
// if ($number > 10) {
//     echo '10よりも大きいです。' . "\n";
// } else {
//     echo '10以下です。' . "\n";
// }

if ($number > 10) {
    echo '10よりも大きいです。';
} elseif ($number == 10) {
    echo '10です。';
} else {
    echo '10よりも小さいです。';
}
