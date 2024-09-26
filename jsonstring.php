<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $str = [
        "name"=>"sjkdfs",
        "id"=>101,
        "qualification"=>["10th","12th"]
    ];

    $str1 = json_encode($str);
    json_decode($str1)

?>
</body>
</html>