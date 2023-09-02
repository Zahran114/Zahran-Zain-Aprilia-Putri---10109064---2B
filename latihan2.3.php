<?php
$x = 10;
$y = 6;
echo $x % $y;
echo "<br>";
?>

<?php
$x = 10;
$y = 6;
echo $x ** $y;
echo "<br>";
?>

<?php
$x = 5;
$y = 6;
echo $x;
echo "<br>";
?>

<?php
$x = 15;
$y = 4;
echo $x;
echo "<br>";
?>

<?php
$x = 5;
$y = 10;

var_dump($x != $y);
echo "<br>";

$x = 10;
$y = 10;

var_dump($x !== $y);
echo "<br>";

$x = 16;
$y = 10;

var_dump($x == $y);
echo "<br>";

$x = 6;
$y = 6;

var_dump($x === $y);
echo "<br>";

$x = 15;
$y = 10;

var_dump($x <=> $y);
?>

<?php
$x = 10;
echo ++$x;
echo "<br>";
?>

<?php
$x = 10;
echo $x--;
echo "<br>";
?>

<?php
$x = 100;
$y = 50;

if ($x >= 100 and $y == 50) {
    echo "Hello Word and!";
}
echo "<br>";

if ($x == 100 or $y == 80) {
    echo "Hello Word or!";
}
echo "<br>";

if ($x >= 100 && $y == 50) {
    echo "Hello Word $$!";
}
echo "<br>";

if ($x >= 100 || $y == 80) {
    echo "Hello Word ||!";
}
echo "<br>";

if ($x !== 100) {
    echo "Hello Word! not";
}
echo "<br>";
?>