<?php
$db = "php25jundb";
$tbl = "emp_tbl";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $con = mysqli_connect("localhost","root","",$db);
    if(!$con) die("DB Connection Error");
    $sql = "DELETE from $tbl where id = ".$id;
    $res = mysqli_query($con,$sql);
    if($res){
        echo true;
    } 
}

?>