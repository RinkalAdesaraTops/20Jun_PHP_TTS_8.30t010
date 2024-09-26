<?php
$db = "php25jundb";
$tbl = "user_tbl";
    if(isset($_POST['save'])){      
        $id = $_POST['uid'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pwd = $_POST['password'];
        $gender = $_POST['gender'];
        $qual = json_encode($_POST['qual']);
        $country = $_POST['country'];
        $con = mysqli_connect("localhost","root","",$db);
        if(!$con) die("DB Connection Error");
        $sql = '';
        if($_FILES['profileimage']['error'] == 0){
            //image update
            $img = $_FILES['profileimage']['name']; //get img name
            $folder = './uploads/';
            if(move_uploaded_file($_FILES['profileimage']['tmp_name'],$folder.$img)){
                echo "image uploaded";
            }
            $sql = "UPDATE $tbl SET name='$name',email='$email',password='$pwd',gender='$gender',qualification='$qual',country='$country',image='$img' WHERE id= ".$id;
        } else {           
            $sql = "UPDATE $tbl SET name='$name',email='$email',password='$pwd',gender='$gender',qualification='$qual',country='$country' WHERE id= ".$id;
        }
        if(mysqli_query($con,$sql)){
            echo "Updated successfully...";
            // echo "<script></script>";
            header('Location:display.php');
        } else {
            echo "Error in Update operation";
        }
    }
?>