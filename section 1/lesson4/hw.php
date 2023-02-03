<?php
$a = 0;
$b = "ss";
$c = 1.4;
echo isset($a, $b, $c)."<br>";

$one = 1;
$two = "string";
$thr = 1.4;
$four = false;
$five = "";

echo is_int($one);
echo is_string($two);
echo is_double($thr);
echo is_bool($four);
echo is_null($five);
echo "<br>";

unset($two, $thr, $five);
echo gettype($two);