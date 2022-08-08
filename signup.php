<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="">
    <title>Sign up now!</title>
</head>
<body >


        <nav>
        <?php include "lognav.php"?>
        </nav>
    

<div class="body">
 <div class="signupform">
        <form action="test.php" method="POST">

            <h1>SIGN UP</h1>
                <div class="box-1">
                    <div>
                    <h2>Essential Credentials</h2>
                    </div>
                    <div id="esscred">
                    <input type="text" name="user" id="user" placeholder="Username here">
                        <br>
                        <input type="email" name="email" id="email" 
                        placeholder="Email address">
                        <br>
                        <input type="password" name="pass" id="pass" placeholder="Password here">
                        <br>
                        
                    </div>
                </div>
                <div class="border">
    
                </div>
                <div class="box-2">
                    <div>
                        <h2>Personal Credentials</h2>
                    </div>
                    <div id="prncred"> 
                        <select name="" id="formtitle" placeholder="title" value="">
                            <option>Mr</option>
                            <option>Mrs</option>
                            <option>Ms</option>
                            <option>Miss</option>
                            <option>Professor</option>
                            <option>Master</option>
                            <option>Dr</option>
                        </select>
                        <br>
                        <input type="text" name="Fname" id="Fname" placeholder="First Name Here">
                        <br>
                        <input type="text" name="Lname" id="Lname" placeholder="Last Name Here">
                        <label for="">
                            Date of Birth
                            <br><br>
                            <input type="date" id="formdate" value="" placeholder="dd-mm-yy" min="1960-01-01" max="2030-21-12">
                        </label>
                        
                        <br>
                        <label for="">
                            Gender
                            <br><br>
                            <label for="">
                                <input type="radio" value="definitely" name="gender"checked>Male
                            </label>
                            <label for="">
                                <input type="radio" name="gender" >Female
                            </label>
                            <label for="">
                                <input type="radio" name="gender" >Other
                            </label>
                        </label>
                        
                    </div>
                    
                </div>
                <br>
                    <div class="border">
        
                    </div>
                <input type="submit" value="submit" name="submit" id="signupbtn">
        </form>
    </div>
</div>


<?php include "footer.php";?>
    
   
</body>
<script src="sitejava.js"></script>
</html>