<?php

echo "Oops file is running...";
class emp{
    public $name;
    public $age;
    public $salary;

    function getData(){
        echo "Name is ".$this->name;
        echo "<br> Age is ".$this->age;
        echo "<br> Salary is ".$this->salary;
    }

    function setData($n,$a,$s){
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }
}

$obj = new emp();
$obj->setData("Rinkal","25","30000");
$obj->getData();
?>