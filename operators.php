<?php
/*
Operators in PHP
1. Arithmatic Operators
2. Assignment Operators
3. Comparison Operators
4. Logical Operators
*/

$a = 45;
$b = 8;

// 1. Arithmatic Operators
// Note: % is used for finding remainder (modulus) and ** is used for raising the no. to a power
echo "The sum of a and b is: " . ($a + $b) . "<br>";
echo "The difference of a and b is: " . ($a - $b) . "<br>";
echo "The product of a and b is: " . ($a * $b) . "<br>";
echo "The division of a and b is: " . ($a / $b) . "<br>";
echo "The modulus when a is divided by b is: " . ($a % $b) . "<br>";
echo "The value of a to the power b is: " . ($a ** $b) . "<br>";

// 2. Assignment Operators
$x = $a;
echo "The value of x is: " . $x . "<br>";
$a += 6;
echo "The new value of a is: " . $a . "<br>";
$a -= 6;
echo "The new value of a is: " . $a . "<br>";
$a *= 6;
echo "The new value of a is: " . $a . "<br>";
$a /= 6;
echo "The new value of a is: " . $a . "<br>";
$a %= 6;
echo "The new value of a is: " . $a . "<br>";

// 3. Comparison Operators
// Note: <> is used for not equal to
$x = 7;
$y = 7;
echo "If x == y, returned value is: ";
echo var_dump($x == $y);
echo "<br>";
echo "If x > y, returned value is: ";
echo var_dump($x > $y);
echo "<br>";
echo "If x < y, returned value is: ";
echo var_dump($x < $y);
echo "<br>";
echo "If x <> y, returned value is: ";
echo var_dump($x <> $y);
echo "<br>";
echo "If x <= y, returned value is: ";
echo var_dump($x <= $y);
echo "<br>";
echo "If x >= y, returned value is: ";
echo var_dump($x >= $y);
echo "<br>";

// 4. Logical Operators
$m = true;
$n = false;
echo "If m and n, returned value is: ";
echo var_dump($m and $n); // Returns true only when both are true, else false, can also be used as &&
echo "<br>";
echo "If m or n, returned value is: ";
echo var_dump($x or $y); // Returns true when at least one value is true, can also be used as ||
echo "<br>";
echo "The value of !m (not of m) is: ";
echo var_dump(!$m); // Returns the opposite value
echo "<br>";
?>