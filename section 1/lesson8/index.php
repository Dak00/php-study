<?php

// $str1 = "Good ";
// $str2 = "PHP ";

// $num = 123;
// $num2 = 321;

// $str = $str1 . $str2 ;

// //$nums = $num2. $num;
// //$num .=$num2;

// echo $num;

// $content = file_get_contents('content/index.html');

// echo $content;

$nums = 1;

begin:
$nums++;
echo "$nums <br>";
if($nums >= 22) goto finish;
goto begin;
finish:
