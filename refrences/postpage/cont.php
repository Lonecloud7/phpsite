<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>content</title>
</head>
<body>
    <div style="text-align:center; padding:20px; border:3px solid black;">

    <form action="posthome.php" method="POST">
    <label for="" >TITLE</label>
    <br>
        <input type="text" name="title" 
        style="height:20px; width:30%;"><br><br>
    <label for="">BLOG</label>
    <br>
        <textarea name="body" id="" cols="120" rows="10"></textarea><br><br>
    
    <input type="submit" value="PUBLISH" name="submit">

    </form>

    </div>
</body>
</html>