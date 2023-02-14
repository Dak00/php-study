<?php
//define()

// define('PI',  3.14);
// defined(PI);

// echo PI;
// echo PHP_EOL;
//require_once 'utilites/second.php'; // относительный путь
//require_once 'C:\xampp\htdocs\php-study\section 1\lesson7\utilites\second.php'; // Абсолютный путь
require_once __DIR__.'/utilites/second.php'; 
echo "This is file index <br>";

//КОнстанты класса
class ConstantClass{
    const NAME = "Const";

}

// echo ConstantClass::NAME;
if(defined('ConstantClass::NAME')){
    echo "True <br>";
}else{
    echo "False <br>";
}