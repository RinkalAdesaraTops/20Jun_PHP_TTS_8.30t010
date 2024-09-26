<?php
$db = "php25jundb";
$tbl = "user_tbl";
if(isset($_GET['id'])){
    $con = mysqli_connect("localhost","root","",$db);
    if(!$con) die("DB Connection Error");
    $id = $_GET["id"];
    $sql = "DELETE FROM $tbl where id = ".$id;
    if(mysqli_query($con,$sql)){
        echo "Deleted successfully...";
        // echo "<script></script>";
        header('Location:display.php');
    } else {
        echo "Error in Deletion";
    }

} else {
    echo "Id not found...";
}

?>