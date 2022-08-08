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

    if(isset($_POST["submit"])){
        

        $username = $_POST["user"];
        $password = $_POST["pass"];

        $query = mysqli_query($conn,"SELECT * FROM users WHERE 
        username = '$username' && password = '$password'");

        if(mysqli_num_rows($query)>0){
            
            session_start();
            $_SESSION["projectusers"] = "true";
            header("location:homepage2.php");
        }
        else if($username == $admin && $password == $adminpass){
            $_SESSION["projectusers"] = "true";
            header("location:adminpage.php");
        }
        else{
            header("location:homepage.php");

        }
    }


    ?>
    



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="site.css"> -->
</head>

<style>
        <?php include "site.css" ?>
    </style>
<body>
    <div id="formsignup">
        <form action="loginform.php" method="POST">
            <div class="closegrp">
                    <div id="closebtn">
                        <a href="#">&#215;</a>
                    </div>
                    <div class="msg">
                        message
                    </div>
            </div>
            
            <!-- <label for="">USERNAME</label> -->
            <br><br>
            <input type="text" name="user" id="username" placeholder="username">
            <br><br>
            <!-- <label for="">PASSWORD</label> -->
            <br><br>
            <input type="password" name="pass" id="password" placeholder="password">
            <br><br>
            <input type="submit" value="Log in" name="submit" id="password">
            <br>

            <p>Don't have an account yet? <br><br><a href="signup.php" id="formchg">Create a new account</a></p>
        </form>
    </div>
</body>
<script src="sitejava.js"></script>
</html>