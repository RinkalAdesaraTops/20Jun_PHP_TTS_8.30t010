<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
/*
1
2 3
4 5 6
7 8 9 10
*/
$k=1;
for($i=1;$i<=5;$i++){
    for($j=1;$j<=5;$j++){
        if($j<=$i){
            echo $k++." ";
        }
    }
    echo "\n";
}
?>

</body>
</html>