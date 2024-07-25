<?php
/*
1
2 3
4 5 6
7 8 9 10
*/
$k=1;
for($i=1;$i<=5;$i++){
    for($j=5;$j>=1;$j--){
        if($j<=$i){
            echo "* ";
        } else {
            echo "@ ";
        }
    }
    echo "\n";
}
?>
<?php
$no = 1214; //total 2 4 5- count
//palindrom - reverse == 245--- 542
//armstrong - 153 -- 1^3+5^3+3^3 = 153
$count = 0;
$sum = 0;
$m = 1;
$rev =0;
$f= $no;
while($no>0){
    $r = $no%10;$count++;
    $no = floor($no/10); 
    $sum = $sum+($r*$r*$r);
    $m *= $r;
    $rev = $rev*10 + $r;
}
echo "\n total digits are $count";
echo "\n Sum of digits are $sum";
echo "\n M $m";
echo "\n Reverse no $rev";
if($rev == $f){
    echo "\n it is palindrom";
} else {
    echo "\n it is not palindrom";
}
?>