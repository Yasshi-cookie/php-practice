<?php
/**
 * require, includeはどちらも他のファイルを読み込むための記述
 * 違いは、読み込むファイルが存在しない場合、
 * requireはその時点でエラーを吐き出して動作を終了する
 * includeはエラーを吐き出すが、処理を続ける
 */
require 'php_samples/4-10_include.php';
// include 'php_samples/4-10_include.php';

echo sum(10, 15);
