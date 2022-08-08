<?php

$connect = mysqli_connect("127.0.0.1", "root", "", "mytest");

if(!$connect){
    echo "Not connected to server";
}
if(!mysqli_select_db($connect, "mytest")){
    echo "not connected to database";
}
else{
    echo "database is connected";
}

$name = $_POST["name"];

$type = $_POST["type"];

$model = $_POST["model"];

$sql = "INSERT INTO test (NAME, TYPE, MODEL) VALUES ('$name', '$type', '$model')";

if(!mysqli_query($connect, $sql)){

    echo "NOT INSERTED";
}
else{
    echo "DATA IS IN!";

    header("refresh :2; url=test3.php");
}





?>