<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
    
    <title>navbar</title>
    <style>
  <?php include "blogstyle.css" ?>
     </style>
</head>
<body>
    <div class="nav">
        <nav>
           
            <ul>
                <li>
                    <a href="homepage.php"><img src="img/logo2.png" alt="" id="logo"></a>
                    
                </li>
                <div id="navitems">
                <li>
                    <a href="">Navigation 1</a>
                </li>
                <li>
                    <a href="">Navigation 2</a>
                </li>
                <li>
                    <a href="">Navigation 3</a>
                </li>
                <li>
                    <a href="">Navigation 4 </a>
                </li>
            </div>
                <li>
                    <div id="signup">
                        <a href="">Sign-in</a>
                        
                    </div>
                </li>
            </ul>
        </nav>
    </div>
    <?php include "loginform.php";?>
</body>
<script src="sitejava.js"></script>
</html>