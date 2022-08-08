<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload files</title>
</head>
<body>
    <form action="uploadfile.php" method="POST">

    <input type="file" name="file">

    <input type="submit" value="upload" name="submit">

    </form>
</body>
</html>


<?php

$connect = mysqli_connect("127.0.0.1", "root", "", "user_login");

if(!$connect){

    echo "<h2>SERVER NOT CONNECTED</h2> <br><br>";
}
else{
    echo "<h2>SERVER IS CONNECTED</h2> <br><br>";
}
if(!mysqli_select_db($connect, "user_login")){
    echo "<h2>DATABASE NOT SELECTED <br><br></h2>";
}
else{
    echo "<h2>DATABASE IS SELECTED <br><br></h2>";
}

if(isset($_POST["upload"])){

    $file = rand(1000,100000). "_".$_FILES["file"]["name"];
    $file_loc = $_FILES["file"]["tmp_name"];
    $file_size = $_FILES["file"]["size"];
    $file_type = $_FILES["file"]["type"];
    $folder = "fileupload/";

//new file
    $new_size = $file_size/1024;

    //make file name in lower case

    $new_file_name=strtolower($file);

    $file_file=str_replace("", "-", $new_file_name);

    if(move_uploaded_file($file_loc,$folder,$final_file)){

        $sql = "INSERT INTO file(file_name, type,size) VALUES ('$final_file_name','$file_type','$new_size')";
        if(!$mysqli_query($connect,$sql)){
            echo "ERROR. TRY AGAIN!";
        }
        else{

            echo "<h2>FILE UPLOADED</h2>";

            header("refresh:3; url=fileupload.php");
        }
        
    }
    
}

?>