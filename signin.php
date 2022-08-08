<?php
    
    // $db = "projectusers";
    $conn = mysqli_connect("127.0.0.1", "root", "", "projectusers");

        // if(mysqli_select_db($conn,"projectusers")){
        //     echo "works";
        // }
        // else{
        //     echo "nope";
        // }

        $admin = "admin";

        $adminpass = "admin";
        

    if(isset($_POST["submit1"])){
        

        $username = $_POST["user"];
        $password = $_POST["pass"];

        $query = mysqli_query($conn,"SELECT * FROM users WHERE 
        username = '$username' && password = '$password'");

        if(mysqli_num_rows($query)>0){
            
            session_start();
            
            $_SESSION["projectusers"] = "true";
            // $_SESSION["user"] = $_POST["user"];
            header("location:homepage2.php");
        }
        else if($username == $admin && $password == $adminpass){
            $_SESSION["projectusers"] = "true";
            header("location:adminpage.php");
        }
        else{
            $error = "your not done yet";

        }
    }
    


    ?>
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formstyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
    <title>Sign up now!</title>
</head>
<body >
        
        <nav>
        <?php include "lognav.php"?>
        </nav>
    
    <div class="body">


    
    <div class="signinform">
        

            
            <div class="box-3">
            <form action="signin.php" method="POST">
            <h1>SIGN IN</h1>
                <!-- <?php echo $error;?> -->
                
                    <div id="esscred">
                        <input type="text" name="user" id="user" 
                        placeholder="Username here">
                        <br>
                        <input type="password" name="pass" id="pass" placeholder="Password here">
                        <br>
                    </div>
                    <div class="border">
    
                    </div>
                    <input type="submit" value="submit" name="submit1" id="signupbtn">
                
            </form>
        </div>

        <div class="box-4">
            <img src="img/img9.jpg" alt="">
        </div>
                
                
                
                
    </div>
    </div>

    <?php include "footer.php";?>

    

    
   
</body>
<script src="sitejava.js"></script>

</html>