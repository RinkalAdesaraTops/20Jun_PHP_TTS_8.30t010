<?php

class baseclass{
    function display(){
        echo "parent display called..";
    }
}
class childclass extends baseclass{
    function display(){
        parent::display();
        echo "child display called..";
    }
}
$obj = new childclass();
$obj->display();
// $obj->display1();

?>