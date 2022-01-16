<?php
$q1 = 5;
$q2 = 10;
$answer = $q1 + $q2;

echo $q1 . "+" . $q2 . "は？ > ";

$users_answer = (int)trim(fgets(STDIN));

while ($answer !== $users_answer) {
    echo '残念もう一回！ > ';
    $users_answer = (int)trim(fgets(STDIN));
}

echo "正解！\n";
exit;
