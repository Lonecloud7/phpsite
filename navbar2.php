<?php

$username2 = "LOGGED IN";
?>

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
                    <a href="homepage2.php"><img src="img/logo2.png" alt="" id="logo3"></a>

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
                        <a href="blogpage.php">View blogs</a>
                    </li>
                </div>
                <li>
                    <div id="signup">
                        <?php echo $username2; ?>

                    </div>
                </li>
                <li>
                    <div id="headbutton2">
                        <a href="logout.php">Log out</a>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</body>
<script src="sitejava.js"></script>

</html>