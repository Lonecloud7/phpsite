<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $con = mysqli_connect("localhost", "root", "", "blog");

    if(!$con){

        echo "SERVER NOT CONNECTED<br><br>";
    }
    if(!mysqli_select_db($con,"blog")){
        echo "DATABASE NOT CONNECTED<br><br>";
    }

    $query = "SELECT * FROM blogs";
    $result = mysql_query($con,$query);

    $post = mysqli_fetch_assoc($result, MYSQLI_ASSOC);

    var_dump($post);

    echo var_dump($post);
   
    ?>
</body>
</html>