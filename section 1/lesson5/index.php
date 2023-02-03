<?php
//КЛассы и объекты
//public, private, protected спецификаторы доступа
//public используется для объевления переменной которой можно дотенутся из вне и внутри класса;
//private можем обращятся к переменным внутри класса
//protected
//включает файл один раз require_once 'SomePeople.php'; 

class SomePeople{
    // public писпользуется для задания области видимости переменных
     public $age; 
     public $name;
     
}

$nick = new SomePeople;
$nick -> age = 30;
$nick -> name = "Nick";

//echo $nick->name;
//unset($nick);

//$dasha  = new SomePeople();
//$nick = 11;

class Location{
    public $x;
    private $y;
    public $z;
}

$loc = new Location();
$loc  -> x = 23.22;
$loc -> z = 25.5;


