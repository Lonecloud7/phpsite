<?php

$conn = mysqli_connect("127.0.0.1", "root", "", "user_login");

if(!$conn){

    echo "<h3>server not connected</h3>";
}
else if($conn){
    echo "<h3>sever is connected</h3>";
}

if (!mysqli_select_db($conn, "user_login")){
    echo "<h3>DATABASE NOT CONNECTED!</h3>";
}
else if(mysqli_select_db($conn, "user_login")){
    echo "<h3>DATABASE IS CONNECTED</h3>";
}

if(isset($_POST["submit"])){

    $username=$_POST["username"];
    //password encryption
    $password=$_POST["password"];
    $email=$_POST["email"];

    $sql = "INSERT INTO users (username,email,password) VALUES ('$username','$email','$password')";

    if(mysqli_query($conn, $sql)){

        echo "DATA WAS SUCCESFULLY INSERTED ";
    }
    else{
        echo "ERROR DATA NOT SENT";
    }

    header("refresh:2;url=login.php");
}



?>