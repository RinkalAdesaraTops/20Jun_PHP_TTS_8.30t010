<?php
$db = "php25jundb";
$tbl = "user_tbl";
    if(isset($_POST['save'])){
        
        $img = $_FILES['profileimage']['name']; //get img name
        $folder = './uploads/';
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pwd = $_POST['password'];
        $gender = $_POST['gender'];
        $country = $_POST['country'];
        $qual = json_encode($_POST['qual']);
        $con = mysqli_connect("localhost","root","",$db);
        if(!$con) die("DB Connection Error");
        if(move_uploaded_file($_FILES['profileimage']['tmp_name'],$folder.$img)){
            echo "image uploaded";
        }

        $sql = "INSERT INTO $tbl values('','$name','$gender','$email','$pwd','$qual','$country','$img')";
       
        if(mysqli_query($con,$sql)){
            echo "Inserted successfully...";
            // echo "<script></script>";
            header('Location:display.php');
        } else {
            echo "Error in Insertion";
        }
    }
?>