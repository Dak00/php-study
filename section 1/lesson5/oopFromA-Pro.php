<?php
class Person
{
    public $name = "Undefined", $age = 17;
    function __construct($name = "Unknown", $age)
    {
        $this -> name = $name;
        $this -> age =$age;
    }
    function displayInfo()
    {
        echo "Name: $this->name";
    }
    function __destruct()
    {
        echo "Вызов деструктора";
    }
}
class Employee extends Person
{
    public $company;
    function __construct($name, $company)
    {
        
        parent::__construct($name);
        $this -> company = $company;
        // $this -> name = $name;
        // $this -> company = $company;
    }
    function displayInfo()
    {
        parent::displayInfo();
        echo "Works in $this->company <br>";
        // echo "Name : $this->name <br>";
        // echo "Company : $this->company <br>";
    }
}
$tom = new Employee("tom", "Microsoft");
$tom ->displayInfo();
// $tom = new Person("Tom", 36);

// $tom -> displayInfo();

// $bob = new Person("Bob", 43);
// $bob -> displayInfo();