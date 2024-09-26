<?php
// session - server side- username&password
//cookie - client side 
session_start(); 
$_SESSION['myname'] = "Rinkal";
$_SESSION['qualification'] = "MCA";

echo "Name is ".$_SESSION['myname'];
echo "Qualification is ".$_SESSION['qualification'];
//func name same-but arguments are diffrent-overloading
//Overriding -- func name same,argument same but in parent&child class
class abc{
    function test($a){

    }
} 
class xyz extends abc{
    function test($a){

    }
}
//abc::test(10)
// function abc($a){

// }

// function abc($a,$b){

// }
?>