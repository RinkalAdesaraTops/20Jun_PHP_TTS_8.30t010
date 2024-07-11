<?php
echo "Hii <br>";
echo "Hello<br>";

$a = 10;
$b=20;
echo "<br>Addition is ".$a+$b."<br>";
echo "<br>Modulus is ".(27%4)."<br>"; //reminder return 
echo "a is ".$a."<br>";
$b = $a++; //postfix a=11 b=10 first assign value & then increment

echo "a is ".$a."<br>";
echo "b is ".$b."<br>";


$b = ++$a; //prefix a= 12 b=12 //first increment & then assign to another variable
echo "a is ".$a."<br>";
echo "b is ".$b."<br>";



/* <!-- Arithmetic -- +,-,*,/,%-modulus,++,-- -->
// <!-- Assignment -- +=,-=,*=,/=,%= -->
// <!-- Relational -- <,>,<=,>=,==,!=,===,!== --> */

// $b = $b+$a;

// $b += $a;

if($a>=$b){
    echo "A is maximum"."<br>";
} else {
    echo "B is maximum"."<br>";
}
$a = 10;
$b = '10';
var_dump($a==$b); //check only value
var_dump($a===$b); //value & type


?>