<?php
$num1 = 25;
$num2 = 10;

if ($num1 > $num2) {
    $max = $num1;
    $min = $num2;
} else {
    $max = $num2;
    $min = $num1;
}

echo "First Number: " . $num1 . "<br>";
echo "Second Number: " . $num2 . "<br>";
echo "Maximum Number: " . $max . "<br>";
echo "Minimum Number: " . $min;
?>