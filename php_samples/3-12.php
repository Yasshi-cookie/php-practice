<?php
echo "点数を入力 > ";
$input = (int)trim(fgets(STDIN));
$inputs = [$input];

echo "1. " . $input . "\n";
echo "合計：" . $input . "\n";
echo "平均：" . $input . "\n";

while ($input !== 0) {
    echo "点数を入力 > ";
    $input = (int)trim(fgets(STDIN));
    $inputs[] = $input;
    $sum = array_sum($inputs);
    $average = $sum / count($inputs);
    foreach ($inputs as $key => $value) {
        echo ($key + 1) . '. ' . $value . "\n";
    }
    echo "合計：" . $sum . "\n";
    echo "平均：" . $average . "\n";
}
