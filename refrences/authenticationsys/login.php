<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="login.php" method="POST">
    <label for="">Username</label>
    <input type="text" name="username" placeholder="enter username">
    <br><br>
    <label for="">Email</label>
    <input type="text" name="email" placeholder="enter Email">
    <br><br>
    <label for="">Password</label>
    <input type="password" name="password" placeholder="enter password">
    <br><br>
    <input type="submit" value="submit" name="submit">
    
    </form>
</body>
</html>

<?php

$conn = mysqli_connect("127.0.0.1", "root", "", "user_login");

if(!$conn){
    echo "<h3>SERVER NOT CONNECT!</h3>";
}

if(!mysqli_select_db($conn, "user_login")){

    echo "<h3>DATABAE NOT SELECTED!</h3>";
}
else{
    echo "<h3>DATABAE IS SELECTED!</h3>";
}

//to hash password

// $password = password_hash($_POST["password"],PASSWORD_DEFUALT);


if(isset($_POST["submit"])){

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];


    $query=mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' && email = '$email' && password = '$password' ");

    if(mysqli_num_rows($query)>0){

        echo "login successsful";

        header("refresh:3; url=welcome.php");
    }
    else{
        echo "invalid credentials";
    }

    
}

?>