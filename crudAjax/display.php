<?php 
$db = "php25jundb";
$tbl = "emp_tbl";

$con = mysqli_connect("localhost","root","",$db);
if(!$con) die("DB Connection Error");
$data = [];
$sql = "select * from $tbl";
$res = mysqli_query($con,$sql);
$tr = '';
while($a = mysqli_fetch_assoc($res)){
    $tr .= "<tr>";
    $tr .= "<td>".$a['id']."</td>";
    $tr .= "<td>".$a['name']."</td>";
    $tr .= "<td>".$a['email']."</td>";
    $tr .= "<td><button class='btn btn-danger' onclick='delData(".$a['id'].")'>Delete</button></td>";
    $tr .="</tr>";
}
echo $tr;
?>