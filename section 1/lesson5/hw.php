<?php
class People{
    public $name;
    public $age;
    public $height;
    public $weight;
    public $bDay;   

    function printInfoPeople(){
        echo $this -> name;
        echo $this -> age;
        echo $this -> bDay;
    }
}
class Animal{
    public $type;
    public $name;
    public $whereLive;
    public $food;
    public $wild;
    function printInfoAnimal(){
        echo $this -> type;
        echo $this -> name;
        echo $this -> whereLive;
    }
}
class Planets{
    public $name;
    public $type;
    public $where;
    public $distance;
    public $life;

    function printInfoPlantes(){
        echo $this -> name;
        echo $this -> type;
        echo $this -> distance;
    }

}
$human = new People();
$human -> name = "Darkhan";
$human -> age = 17;
$human -> bDay = "17-September";
$human -> printInfoPeople();

$animal = new Animal();
$animal -> type = "Cat";
$animal -> name = "Barsik";
$animal -> whereLive = "Every where";
$animal -> printInfoAnimal();

$planet = new Planets();
$planet -> name = "Jupiter";
$planet -> type = "Gas";
$planet -> distance = "821,745,344 km";
$planet -> printInfoPlantes();