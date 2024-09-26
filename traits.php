<?php
trait mycommonclass{
    function add(){
        echo "Add function called..";
    }
    function minus(){
        echo "Minus function called..";
    }
}
class abc{
    use mycommonclass;
}

$obj = new abc();
$obj->add();
$obj->minus();

?>