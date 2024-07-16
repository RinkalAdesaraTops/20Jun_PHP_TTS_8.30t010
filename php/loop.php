<?php
//1 to 5
$i=1;
while($i<=5){ //1<=5 6<=5 //entry controlled loop
    echo $i."<br>"; //1
    $i++; //6
}

//do_while loop -- Exit controlled loop
$j=10;
do{
    echo $j."<br>"; //1
    $j++; //6
} while($j<=15);

//For loop - entry controlled loop
echo "<br>-------------------<br>";
for($k=55;$k<=65;$k++){
    if($k%2!=0)
        echo "$k <br>";
}
?>