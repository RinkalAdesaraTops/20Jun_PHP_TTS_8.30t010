<?php
class xyz{
    public $n;
    public function __construct($name){
        $this->n = $name;
        echo "default constructor called...";
        echo "<br>Name is $name";

    }
    function add(){
        echo "<br>addition func called..";
    }
    function __destruct(){
        echo "<br>destructor called....$this->n";
    }
}
$a = new xyz("Rinkal"); //parameterized constructor
$a->add();


?>