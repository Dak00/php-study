<?php
//Конструкции isset() и empty(), gettype()
 $var = "sometext";
 $num = 123;

 $status =  isset($var, $num);// если есть переменная == true
 //echo $status;

 // если нет переменной, пустая строка, если значиение 0, null, false == true
 $status2 =  empty($num);
//  echo $status2;

$str = "";
// Проверка существования переменной 
if(isset($str)){
    echo "Переменная $str существует"."<br>";
}
if(empty($str)){
    echo "Переменная $str пустая";
}

echo "<br>";
// Определяем тип переменной
$flo = 123.125;
echo is_int($flo);
echo is_double($flo);
echo "<br>";
echo gettype($flo);
