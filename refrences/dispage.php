<?php



if(isset($_POST["submit"])){

            
    session_start();
    $_SESSION["Gname"] = $_POST["Gname"];

    header("location: session.php");
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php display</title>
    <link rel="stylesheet" href="dispage.css">
   
</head>
<body>
    <div class="container">

    

    <div class="img">
        
        <header>
            <div class="header">
                <h1>
                    PHP DISPLAY
                </h1>
            </div>
            <h3>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate!
            </h3>
        </header>

        <div class="container2">
        <div class="signup">

<form action="dispage.php" method="GET">

    <label for="" style="display: block;">NAME</label>
    <input type="text" name="username" placeholder="enter name"  id="exp"style="width:80%;
    margin:auto; width: 300px; height: 40px; margin: 5px;">

    <label for="" style="display: block;">EMAIL</label>
    <input type="text" name="email" placeholder="enter email" style="width:80%;
    margin:auto; width: 300px; height: 40px; margin: 5px;">

    <label for="" style="display: block;">PASSWORD</label>
    <input type="password" name="password" placeholder="enter password here" style="width:80%;
    margin:auto; width: 300px; height: 40px; margin: 5px;">
    <br>
   
    
    <a href="#" class="button">
        <input type="submit" value="SUBMIT" >
    </a>
</form>
    </div>
        </div>
    </div>
    <br><br>

    <div class="display">
        <br>

        <p>YOUR USERNAME IS:<div class="phpout"><?php echo $_GET["username"]; ?></div> </p>
        <p>YOUR EMAIL IS:<div class="phpout"><?php echo $_GET["email"]; ?></div> </p>
        <p>YOUR PASSWORD IS:<div class="phpout"><?php echo $_GET["password"]; ?></div> </p>
        <br><br>
    </div>

    <br><br>

    <!-- <div class="container2">
        <div class="signup">

<form action="dispage.php" method="POST">

    <label for="" style="display: block;">NAME</label>
    <input type="text" name="student" placeholder="enter name" style="width:80%;
    margin:auto; width: 300px; height: 40px; margin: 5px;">
    <br>
   
    
    <a href="#" class="button">
        <input type="submit" value="RESULT" >
    </a>
</form>
    </div>
        </div>
    </div>
    <br><br>

    <div class="display">
        <br>
    <?php 
    $grades = array("Angela"=>"A", "jason"=>"D", "jake"=>"F", "jenny"=>"C", "ben"=>"A-");
    ?>
    <p><div class="phpout"><?php echo $grades[$_POST["student"]]; ?></div> </p>
    
    <br><br>
    </div> -->
    <br><br>
    <div class="container2">
        <div class="signup">

<form action="dispage.php" method="POST">

    <label for="" style="display: block;">NAME</label>
    <input type="text" name="username2" placeholder="enter name" style="width:80%;
    margin:auto; width: 300px; height: 40px; margin: 5px;">

    <label for="" style="display: block;">EMAIL</label>
    <input type="text" name="email2" placeholder="enter email" style="width:80%;
    margin:auto; width: 300px; height: 40px; margin: 5px;">

    <br>
   
    
    <a href="#" class="button">
        <input type="submit" value="SUBMIT" >
    </a>
</form>
    </div>
        </div>
    </div>

    <br><br>
    <div class="display">
        <br>

        <p><div class="phpout"><?php 
        
        $username2= $_POST["username2"];
        $email2= $_POST["email2"];

        $error="you have an error";
        $success="you are successful";

        if(filter_input(INPUT_POST, "email2", FILTER_VALIDATE_EMAIL)){
            echo "email is good";
        }
        elseif($username2="john" && $email ="john@gmail.com"){
            echo $success;
        }
        else{
            echo $error;
        }
        
        
        ?></div> </p>
        
        
    </div>
    <br><br>
    <div class="container2">
        <div class="signup">

<form action="session.php" method="POST">

    <label for="" style="display: block;">GUEST NAME</label>
    <input type="text" name="Gname" placeholder="enter name" style="width:80%;
    margin:auto; width: 300px; height: 40px; margin: 5px;">


    <br>
   
    
    <a href="#" class="button">
        <input type="submit" value="SUBMIT" name="submit" >
    </a>
</form>
    </div>
        </div>
    </div>

    <br><br>
        <?php 
        
        
       
        
        
        ?>
        
        <br><br>
    </div>

    
    

</div>

    
    
   
</body>
</html>