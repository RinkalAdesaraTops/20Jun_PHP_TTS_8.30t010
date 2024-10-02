<?php 
$db = "php25jundb";
$tbl = "emp_tbl";
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$con = mysqli_connect("localhost","root","",$db);
 if(!$con) die("DB Connection Error");

 $sql = "INSERT INTO $tbl values('','$name','$email','$password')";
       
        if(mysqli_query($con,$sql)){
            echo "Inserted successfully...";
            header('location:display.php');
            // echo "<script></script>";
        } else {
            echo "Error in Insertion";
        }
?>