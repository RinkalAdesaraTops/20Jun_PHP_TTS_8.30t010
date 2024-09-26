<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php
$db = "php25jundb";
$tbl = "user_tbl";
$con = mysqli_connect("localhost","root","",$db);
if(!$con) die("DB Connection Error");

$sql = "SELECT * FROM $tbl";
$res = mysqli_query($con,$sql);
//mysqli_fetch_assoc()
?>
<a href="registrationform.php" class="btn btn-info">Add User</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <!-- [id] 
    -->
    <?php while($a = mysqli_fetch_assoc($res)){ ?>
            <tr>
                <td><?php echo $a['id'];?></td>
                <td><?php echo $a['name'];?></td>
                <td><?php echo $a['email'];?></td>
                <td><?php echo $a['gender'];?></td>
                <td><a href="registrationform.php?id=<?php echo $a['id'];?>" class="btn btn-primary">Edit</a><a href="delete.php?id=<?php echo $a['id'];?>" class="btn btn-danger">DELETE</a></td>
            </tr>
     <?php } ?>  
  </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>
