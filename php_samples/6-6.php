<?php
try {
    $file = new SplFileObject('php_samples/notfound/log.txt', 'w');
} catch (Exception $e) {
    // echo 'ファイルを作成できませんでした。';
    // exit();
    die('ファイルを作成できませんでした。');
}

$file->fwrite('ログです');

echo "\n";
