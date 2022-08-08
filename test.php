
<?php

if(isset($_POST["submit3"])){

    session_start();
    $_SESSION["title"] = $_POST["title"];

    $_SESSION["cont"] = $_POST["cont"];

    header("location:blogpage.php");
}

?>


<?php

$conn = mysqli_connect("127.0.0.1", "root", "","projectusers");

if(!$conn){
    echo "server not connected <br><br>";
}

else{
    echo "server is connected <br><br>";
}

if(!mysqli_select_db($conn,"projectusers")){
    echo "database not selected <br><br>";
}
else{
    echo "database is connected<br><br>";
}

if(isset($_POST["submit"])){

    $username = $_POST["user"];
    $email = $_POST["email"];
    $password = $_POST["pass"];

    $sql = "INSERT INTO users (username,email,password)
    VALUES ('$username','$email','$password')";

    if(mysqli_query($conn, $sql)){

        echo "data is uploaded<br><br>";
    }
    else{
        
        echo "data not uploaded<br><br>";
    }

    header("location:signin.php");
}


?>


                <?php

            $title = $_POST["title"];

            $cont = $_POST["cont"];

            $conn = mysqli_connect("127.0.0.1", "root", "", "projectusers");

            $sql = "INSERT INTO blogs (title, content) VALUES ('$title', '$cont')";

            if( mysqli_query($conn, $sql)){

                echo "PUBLISHED";
                // header("location:adminpage.php");
            }
            else{
                echo "NOT DONE YET";
            }

            // if(isset($_POST["submit"])){

                
            // }

            ?>





























































<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="test2.php" method="POST">
    <label for="Name">Name</label>
    <input type="text" name="name" id="Name">
    <br><br>
    <label for="type">Type</label>
    <input type="text" name="type" id="type">
    <br><br>
    <label for="model">Model</label>
    <input type="number" name="model" id="model">
    <br><br>
    <input type="submit" value="submit" name="submit">
    </form>
</body>
</html> -->