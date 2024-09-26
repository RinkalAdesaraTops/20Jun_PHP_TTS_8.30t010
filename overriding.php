<?Php

class abc{
    function add($r){
        echo "parent add func called...";
    }
}
class xyz extends abc{
    function add($r){
        parent::add(100);
        echo "child add func called...";

    }
}
$obj = new xyz();
// $pObj = new abc;
$obj->add(10);
// $pObj->add(10);

//func name same,argument same but in parent & child class-overiding
?>