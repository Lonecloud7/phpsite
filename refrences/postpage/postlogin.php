<?php

error_reporting(0);

$username = $_SESSION["username"] = $_POST["username"];

if(isset($_POST["submit"])){
    session_start();
 $_SESSION = $_POST["title"];
$_SESSION = $_POST["body"];

//  header("location:postblog.php");
 if(!empty($title) && !empty($body)){
      echo "article publised";
 }
 else{
     echo "article npt publisded";
 }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog page</title>
</head>
<body>
<div class="container">
    <?php include "header.php"?>
    <h1>WELCOME BACK <?php echo $username;?>!</h1>

    <div style="text-align:center; padding:20px; border:3px solid black;">

    <form action="postblog.php" method="post">
            <label for="">TITLE</label>
            <br>
            <input type="text" name="title">
            <br>
            <label for="">BODY</label>
            <br>
            <textarea name="body" id="" cols="120" rows="10"></textarea>
            <br><br>
            <input type="submit" value="submit" name="submit">
            </form>

    </div>
<!-- 
    <h2><?php echo $postdone;?></h2> -->
    <?php include "footer.php"?>
    </div>
</body>
</html>

