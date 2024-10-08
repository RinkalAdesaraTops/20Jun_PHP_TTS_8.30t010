<?php 
$db = "php25jundb";
$tbl = "emp_tbl";
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$id = $_POST['id'];

$con = mysqli_connect("localhost","root","",$db);
 if(!$con) die("DB Connection Error");
$sql = '';
 if($id != ''){
    //update
    $sql = "UPDATE $tbl SET name='$name', email='$email' ,  password='$password' WHERE id=".$id;
 } else {
    //insert
    $sql = "INSERT INTO $tbl values('','$name','$email','$password')";
   
}
if(mysqli_query($con,$sql)){
    header('location:display.php');
    // echo "<script></script>";
} else {
    echo "Error in Insertion";
}
?>