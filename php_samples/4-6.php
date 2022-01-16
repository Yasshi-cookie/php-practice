<?php
function sum($a, $b)
{
    $response = $a + $b;
    return $response;
}

$num1 = 10;
$num2 = 20;

$answer = sum($num1, $num2);
echo $answer . "\n";
