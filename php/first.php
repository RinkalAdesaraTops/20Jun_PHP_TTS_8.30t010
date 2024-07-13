<?php
    echo "Hii Hello<br>";
    echo "test msg";
  //Arithmetic - +,-,*,/,%,++,--
  $a = 250;
  $b = 35;
  $c = $a+$b;
  echo '<br>Addition is--'.$c;
  echo "Modulus is ".(27%4); //returns reminder
  $d = 15;
  echo "<br> d is -- $d";
//   ++ -- +1  --=== -1
   $b=  $d++; //16 postfix  b=15 d=16 first assign & then increment 
  echo "<br> d is -- $d";
  echo "<br> b is -- $b";


    $b = ++$d; //17 prefix d=17 b=17 first increment then assign
  echo "<br> d is -- $d";
  echo "<br> b is -- $b";
//Assignment = +=,-=,*=,/=,%=
 $a += 5;//$a = $a+5;  //255
 //Relational -- <,>,<=,>=,==,!=,===,!==
    $b = 4500;
    $c=2500;
  echo "<br> d is -- $d";
    echo "<br>values are ".($b == $c); //1-true 0-false
    echo "<br>values are ".($b === $c); //1-true 0-false
    echo "<br>values are ".($b>=$c); //1-true 0-false
    //Logical opr - &&,||,!
    echo "<br> a=$a, b=$b";
    echo "<br> a>b and a>c --- ".($a>$b && $a>$c);
    echo "<br> a>b or a>c --- ".($a>$b || $a>$c);
    echo "<br> !a>b --- ".(!($a>$b));
    //Ternary operator -- ?:
    echo "<br>";
    $ans = ($a>$b)?$a:$b;
    echo "<br> Maximum is $ans";
     echo ($a>$b)?"--a is max--":"--b is max--";
     /*max from 3  */
    if($a>$b){
        if($a>$c){
            echo "A is maximum";
        } else {
            echo "C is maximum";
        }
    } else {
        if($b>$c){
            echo "B is maximum";
        } else {
            echo "C is maximum";

        }
    }
    // $c=5678;
echo ($a>$b)?(($a>$c)?"<b>A is max</b>":"<b>C is max</b>"):(($b>$c)?"<b>B is max</b>":"<b>C is max</b>");

?>