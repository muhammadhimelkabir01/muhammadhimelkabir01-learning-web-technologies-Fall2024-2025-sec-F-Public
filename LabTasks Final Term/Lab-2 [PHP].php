<?php

echo "<h2>1. Area & Perimeter of Rectangle</h2>";
$length = 10;
$width = 5;
$area = $length * $width;
$perimeter = 2 * ($length + $width);
echo "Area = $area<br>";
echo "Perimeter = $perimeter<br><br>";


echo "<h2>2. VAT Calculation (15%)</h2>";
$amount = 1000;
$vat = $amount * 0.15;
echo "VAT = $vat<br><br>";


echo "<h2>3. Odd or Even</h2>";
$num = 7;
if ($num % 2 == 0) {
    echo "$num is Even<br><br>";
} else {
    echo "$num is Odd<br><br>";
}


echo "<h2>4. Largest Number</h2>";
$a = 10;
$b = 25;
$c = 15;

if ($a > $b && $a > $c) {
    echo "$a is the largest<br><br>";
} elseif ($b > $a && $b > $c) {
    echo "$b is the largest<br><br>";
} else {
    echo "$c is the largest<br><br>";
}


echo "<h2>5. Odd Numbers (10 to 100)</h2>";
for ($i = 10; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo "$i ";
    }
}
echo "<br><br>";


echo "<h2>6. Search Element in Array</h2>";
$arr = array(5, 10, 15, 20, 25);
$search = 15;
$found = false;

for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] == $search) {
        $found = true;
        break;
    }
}

if ($found) {
    echo "$search found in array<br><br>";
} else {
    echo "$search not found<br><br>";
}


echo "<h2>7. Shapes Using Nested Loops</h2>";

echo "Shape A:<br>";
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}

echo "<br>Shape B:<br>";
for ($i = 3; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "$j ";
    }
    echo "<br>";
}

echo "<br>Shape C:<br>";
$ch = 'A';
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $ch . " ";
        $ch++;
    }
    echo "<br>";
}
 
echo "<h2>8. 2D Array + Nested Loops</h2>";
$arr2d = [
    [1, 2, 3, 'A'],
    [1, 2, 'B', 'C'],
    [1, 'D', 'E', 'F']
];

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < count($arr2d[$i]); $j++) {
        echo $arr2d[$i][$j] . " ";
    }
    echo "<br>";
}

?>
