<?php
// inheritance - reusability of code 
class parent1{
    
    function __construct(){
        
        echo "default constructor called.. $this->a";
    }
    static function msg(){
        echo "parent class called...";
    }
}

class child extends parent1
{
    
    function __construct(){
        parent::__construct(); //to call parent class constructor
        echo "child constructor called..";
        
    }
    function msg1(){
        echo "child class called...";
    }
}

$obj = new child();


?>