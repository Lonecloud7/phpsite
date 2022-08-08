<?php
error_reporting(0);
session_start();
// if(!$_SESSION["projectusers"]){

//   header("location:signin.php");
// }
$title = $_SESSION["title"] = $_POST["title"];
$content = $_SESSION["cont"] = $_POST["cont"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog page</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
  <style>
    <?php include "blogstyle.css" ?>
  </style>
</head>

<body>
  <?php include "navbar2.php"; ?>
  <div class="blog-container">
    <div class="blogbody">
      <div class="blogpost">
        <div id="title2">
          <?php echo $title ?>
        </div>
        <div id="content2">
          <?php echo $content ?>
        </div>
      </div>

      <div class="blogpost">
        <div id="title2">
          <h3>Lorem, ipsum.</h3>
        </div>
        <div id="content2">
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem sapiente quis voluptatum neque dicta similique mollitia
            consequuntur rerum ex, fugit culpa consequatur odio itaque dignissimos dolorem dolorum vel exercitationem fugiat!</p>
        </div>
      </div>
      <div id="headbutton2">
        <a href="adminpage.php">Create blog</a>
      </div>
    </div>
  </div>



  <?php include "footer.php"; ?>
</body>
<script src="sitejava.js"></script>

</html>