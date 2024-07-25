<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // $_POST
    // $_GET
if(isset($_POST['add'])){
    $n1 = $_POST['no1'];
    $n2 = $_POST['no2'];
    echo "Addition is ".($n1+$n2);
} else if(isset($_POST['sub'])) {
    echo "Minus button clicked";
}
?>
    <form action="#" method="post">
        <input type="number" name="no1" id="no1">
        <input type="number" name="no2" id="no2">

        <input type="submit" value="+" name="add">
        <input type="submit" value="-" name="sub">
    </form>
</body>
</html>
