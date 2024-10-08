<?php
$db = "php25jundb";
$tbl = "emp_tbl";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $con = mysqli_connect("localhost","root","",$db);
    if(!$con) die("DB Connection Error");
    $sql = "SELECT * from $tbl where id = ".$id;
    $res = mysqli_query($con,$sql);
    if($res){
        $data = json_encode(mysqli_fetch_assoc($res));
        echo  $data;
    } 
}

?>