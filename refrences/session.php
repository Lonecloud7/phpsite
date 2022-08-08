<?php

session_start();

$Gname = $_SESSION["Gname"] = $_POST["Gname"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dispage.css">
    <title>Session dislay</title>
</head>
<body>
    <div>
        <h1>
            IT GIVES ME GREAT HONOR TO WELCOME <div class="phpout"><?php echo $Gname;?></div>, TO THIS EVENT.
        </h1>
    </div>
</body>

<!-- <?php

   

?> -->
</html>