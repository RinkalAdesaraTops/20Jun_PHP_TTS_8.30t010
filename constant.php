<?php
class abc{
    const pi = 3.14;
    function disp(){
        echo self::pi;
    }
}
$a = new abc();
$a->disp();
// echo abc::pi;

?>