<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <style>
            .error{
                color:red
            }
        </style>
</head>

<body>
    <?php
    // error_reporting(0);
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $db = "php25jundb";
        $tbl = "user_tbl";
        $con = mysqli_connect("localhost", "root", "", $db);
        if (!$con)
            die("DB Connection Error");
        $sql = "SELECT * FROM $tbl where id=" . $id;
        $data = mysqli_query($con, $sql);
        $a = mysqli_fetch_assoc($data);
        $qual = json_decode($a['qualification']);
        $country = $a['country'];
    }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h2><a href="display.php" class="btn btn-primary">Display User</a></h2>
                <h3>Registration Form</h3>
                <form id="userfrm" name="userfrm" action="#" method="post" enctype="multipart/form-data" >
                    <input type="hidden" name="uid" value="<?php echo isset($id) ? $id : '' ?>">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name:</label>
                        <input type="text" name="name" class="form-control" id="name"
                            placeholder="name@example.com" value="<?php echo (isset($id)) ? $a['name'] : ''; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" name="email" id="email" class="form-control" 
                            placeholder="name@example.com" value="<?php echo (isset($id)) ? $a['email'] : ''; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control" 
                            placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Gender</label>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="gender"
                                value="male" <?php echo isset($id) && $a['gender'] == 'male' ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Male
                            </label>

                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1"
                                value="female" <?php echo isset($id) && $a['gender'] == 'female' ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Female
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Qualification : </label>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="10th" name="qual[]"
                                id="flexCheckDefault" <?php echo isset($qual) && in_array("10th", $qual) ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="flexCheckDefault">
                                10th
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="12th" name="qual[]"
                                id="flexCheckChecked1" <?php echo isset($qual) && in_array("12th", $qual) ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="flexCheckChecked">
                                12th
                            </label>

                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="bechlor" name="qual[]"
                                id="flexCheckChecked2" <?php echo isset($qual) && in_array("bechlor", $qual) ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="flexCheckChecked">
                                Bechlor
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="master" name="qual[]"
                                id="flexCheckChecked3" <?php echo isset($qual) && in_array("master", $qual) ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="flexCheckChecked">
                                Master
                            </label>
                        </div>
                    </div>
                    <!-- checkbox dropdown-select-option  -->
                    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Country : </label>

                       <select name="country" id="country" class="form-control">
                        <option value="">--Select Country--</option>
                        <option value="india" <?php echo isset($country)&& $country=='india'?'selected':'';?>>India</option>
                        <option value="usa" <?php echo isset($country)&& $country=='usa'?'selected':'';?>>USA</option>
                        <option value="uk" <?php echo isset($country)&& $country=='uk'?'selected':'';?>>UK</option>
                        <option value="canada" <?php echo isset($country)&& $country=='canada'?'selected':'';?>>Canada</option>
                       </select>
                    </div>
                    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Image : </label>
                    <input type="file" name="profileimage" id="profileimage">
                    <img src="<?php echo isset($id) ? './uploads/'.$a['image'] : ''; ?>" alt="" height="70px" width="70px">
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="<?php echo isset($id) ? 'Update' : 'Save  '; ?>" name="save"
                            class="btn btn-success">
                        <input type="reset" value="Cancel" name="cancel" class="btn btn-danger">
                    </div>
            </div>
            </form>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
        <script>
            $("#userfrm").validate({
                    rules:{
                        name:{
                            required:true,
                            minlength:2,
                            maxlength:10
                        },
                        email:"required",
                        password:"required"

                    },
                    messages:{
                        name:{
                            required:"Please enter Name",
                            minlength:"Enter minimum 2 characters"
                        }
                    },
                    submitHandler: function(form) {
                        form.submit();
                    }
                })
            
            
        </script>
</body>

</html>