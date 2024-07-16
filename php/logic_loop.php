<?php
//1)1 to 10 sum
$sum=0;
$i=10;
while($i>=1){
    // $sum = $sum+$i;
    $sum += $i;
    $i--;
}
echo "Sum is $sum<br>";
//2)Factorial -- 5! = 5*4*3*2*1
$j=5;
$mult = 1;
while($j>=1){
    $mult *= $j;
    $j--;
}
echo "5! is $mult<br>";
//no = 5614 = 5 6 1== total digits -- 4
//sum of digits = 5+6+1 = 12
//Reverse 121=121== palindrom no
//Armstrong no = 153 ==
/*
1^3 5^3 3^3
1+125+27 =153 
*/
$no = 561;
$count = 0;
$sum = 0;
while($no>0){
    $r = $no%10; //5614%10 = 4 561%10 = 1
    $no = floor($no/10); //5614/10= 561.4 = 561
    $count++;
    $sum += $r;
}
echo "<br> Counter is $count";
echo "<br> Sum of digits are $sum";

$no = 1235; 
$f = $no;
$rev = 0;
while($no > 0){ //123>0 12>0 1>0 0>0
    $r = $no%10; //3 12%10=2 1%10= 1
    $rev = ($rev*10) + $r; //0*10 = 0+3=3 3*10+2 = 32 32*10+1 = 321
    $no = floor($no/10); //123/10 = 12.3=12 12/10=1.2=1 1/10=0.1=0
}
echo "<br> Reverse no is $rev";
if($rev == $f){
    echo "<br>It is palindrom no";
} else {
    echo "<br>It is not palindrom no";
}
?>













