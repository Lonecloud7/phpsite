<?php

if(isset($_POST["submit3"])){

    session_start();
    $_SESSION["title"] = $_POST["title"];

    $_SESSION["cont"] = $_POST["cont"];

    // header("location:blogpage.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
    <style>
  <?php include "blogstyle.css" ?>
     </style>
</head>
<body class="adminbody">
    <nav>
    <?php include "navbar2.php";?>
    </nav>

   

    
    <div class="admincont">
        <div class="adminblog">
        
            <form action="blogpage.php" method="POST">
            <br>
                <input type="text" name="title" placeholder="Title" id="title">
                <br><br>
                <textarea name="cont" id="blogcont" cols="120" rows="10" placeholder="Article content here...."></textarea>
                <br><br>
                <input type="submit" value="Publish" name="submit3" id="blogsubmit">
            </form>
        </div>
    </div>

    <div class="button">
        
        <a href="">button1</a>
        <a href="">button2</a>
        <a href="">button3</a>
        <a href="">button4</a>
        <a href="">button5</a>
    </div>
    
    

    <footer>
        <?php include "footer.php";?>
    </footer>


</body>
<script src="sitejava.js"></script>
</html>

