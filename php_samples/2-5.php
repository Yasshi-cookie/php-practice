<?php
const ERAS = [
    [
        'name' => '令和',
        'start_year' => 2018,
    ],
    [
        'name' => '平成',
        'start_year' => 1988,
    ],
    [
        'name' => '昭和',
        'start_year' => 1925,
    ],
    [
        'name' => '大正',
        'start_year' => 1911,
    ],
    [
        'name' => '明治',
        'start_year' => 1867,
    ],
];

echo '西暦を入力してください > ';
$year = trim(fgets(STDIN));
if (!is_numeric($year) || $year < 0) {
    echo '正の数字を入力してください。';
    return;
}

if ($year > date('Y')) {
    echo '未来の日付です';
    return;
};

for ($i = 0; $i < count(ERAS) - 1; $i++) {
    if ($year >= ERAS[$i]['start_year']) {
        echo ERAS[$i]['name'] . "です。\n";
        break;
    }
}
