<?php
error_reporting(0);

 session_start();

    $title = $_SESSION["title"] = $_POST["title"];

$body = $_SESSION["body"] = $_POST["body"];

// echo "yes its set";
// else{
//     echo "not set";
// }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOG PAGE</title>
</head>
<body>
    <div class="container">
    <?php include "header.php"?>
    <div class="content">
        <div class="blog">
            <h3><?php echo $title?></h3>
            <p><?php echo $body?></p>
        </div>
    </div>
    <?php include "footer.php"?>
    </div>
</body>
</html>

