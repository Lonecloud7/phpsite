<?php




if(isset($_POST["submit"])){

    session_start();
    $_SESSION["username"] = $_POST["username"];

    header("location:postlogin.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOG home</title>
</head>
<body>
    <div class="container">
    <?php include "header.php"?>
    <div class="content">
        
        <div class="form">
            <form action="postlogin.php" method="POST">
            <label for="">username:</label>
            <br>
            <input type="text" name="username">
            <br>
            <label for="">password:</label>
            <br>
            <input type="password" name="password">
            <br><br>
            <input type="submit" value="submit" name="submit">
            </form>
            
        </div>
    </div>
    <?php include "footer.php"?>
    </div>
</body>
</html>

