<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <h3>Registration Form</h3>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <form action="#" method="post" id="userfrm" name="userfrm">
                    <div class="form-group">
                        <label for="exampleInputEmail1">User Name:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                            placeholder="Enter email">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Password">
                    </div>

                    <button type="button" id="save" class="btn btn-primary" onclick="savedata()">Save Data</button>
                </form>
            </div>
            <div class="col-md-6">
                <h3>User List</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody id="userlist"></tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

    <script>
        $(document).ready(()=>{
            $.ajax({
                url:"display.php",
                method:'GET',
                success:(res)=>{
                    $("#userlist").html(res)
                },
                error:(err)=>{
                    console.log("Error");                   
                },
            })
        })
        const savedata = () => {
            let name = $("#name").val()
            let email = $("#email").val()
            let pwd = $("#pwd").val()
            $.ajax({
                url: "insert.php",
                method: 'POST',
                data: { name: name, email: email, password: pwd },
                success: (msg) => {
                    document.userfrm.reset()
                    $("#userlist").load('display.php');
                    // $("#userlist").html(res)
                },
                error: () => {
                    console.log("error");
                }
            })
        }

        const delData = (id)=>{
            $.ajax({
                url:"delete.php?id="+id,
                method:"GET",
                success: (msg) => {
                    $("#userlist").load('display.php');
                },
                error: () => {
                    console.log("error");
                }
                
            })
        }
    </script>
</body>

</html>