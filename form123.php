<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" id="userfrm" name="userfrm" method="post">
        Name:
        
        <input type="text" name="name" id="name">
        <p class="error"></p>
        Email:
        <input type="text" name="email" id="email">
        PWD:
        <input type="text" name="password" id="password">
        <input type="submit" value="Save">
    </form>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <script>
        $("#userfrm").validate({
            rules:{
                name:"required"
            }
        });
    </script>
</body>
</html>