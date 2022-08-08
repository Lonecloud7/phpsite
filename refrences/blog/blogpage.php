<?php  include "header.php" ?>

<h1>YOUR BLOG IS PUBLISHED!</h1>

<?php  include "footer.php" ?>

<?php
$conn = mysqli_connect("localhost", "root", "", "blog");

if($conn){
    echo "DATABASE CONNECTED";
}
else{
    echo "DATABASE NOT CONNECTED";
}

echo "<br><br>";


$title = $_POST["title"];

$body = $_POST["body"];

$sql = "INSERT INTO blogs (title,body) VALUES ('$title','$body')";

if(mysqli_query($conn, $sql)){

    echo "BLOG PUBLISHED";

    echo "<br><br>";
}
else{

    echo "BLOG FAILED TO PUBLISH";
}


?>