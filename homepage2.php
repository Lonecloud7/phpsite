<?php



// unset($newsname);

// if (isset($_POST["submit"])){
//     echo "welcome";
// }
// else{
//     header("location:signin.php");
// }
?>

<?php
error_reporting(0);

session_start();
if (!$_SESSION["projectusers"]) {

    header("location:signin.php");
}
// else{
//      $username2 = $_SESSION["user"] = $_POST["user"]; 
// }



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

    <title>homepage2</title>

    <style>
        <?php include "site.css" ?>
    </style>
</head>

<body>
    <div class="container">
        <div>
            <header>
                <?php include "navbar2.php"; ?>

                <div id="headtext">
                    <h1>SAFTEY.</h1>
                    <h1>COMFORT.</h1>
                    <h1>SPEED.</h1>


                    <div id="headbutton">
                        <a href="">Button content</a>
                    </div>
                </div>

            </header>
        </div>

        <div class="content">

            <div class="link">

                <div class="linkcont">
                    <img src="img/img4.jpg" alt="" id="imglink">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Esse voluptates nostrum quisquam repellat
                        quaerat ea, aspernatur excepturi mollitia,
                    </p>
                    <button>click</button>
                </div>
                <div class="linkcont">
                    <img src="img/img3.jpg" alt="" id="imglink">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Esse voluptates nostrum quisquam repellat
                        quaerat ea, aspernatur excepturi mollitia,
                    </p>
                    <button>click</button>
                </div>
                <div class="linkcont">
                    <img src="img/img6.jpg" alt="" id="imglink">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Esse voluptates nostrum quisquam repellat
                        quaerat ea, aspernatur excepturi mollitia,
                    </p>
                    <button>click</button>
                </div>




                <!-- <div class="linkcont">
        <img src="img/img7.jpg" alt="" id="imglink">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Esse voluptates nostrum quisquam repellat
            quaerat ea, aspernatur excepturi mollitia,
        </p>
        <button>click</button>
    </div> -->


            </div>

            <div class="ticketchecker">
                <div id="resultinput">
                    <form class="" action="homepage2.php" method="POST">
                        <h1><label for="">View location prices</label></h1>

                        <input type="text" id="location" name="student" placeholder="Input location">
                        <br>
                        <input type="submit" name="" value="Input" id="pricebtn">
                    </form>
                </div>

                <div id="result">
                    <?php
                    $grades = array("lagos" => "₦25,000", "Port-harcort" => "₦15,000", "Abuja" => "₦30,000", "benin" => "₦20,000", "anambra" => "₦5,000");

                    echo $grades[$_POST["student"]];

                    echo "<br><br>";
                    ?>
                </div>

            </div>

            <div class="newsletter">
                <form action="homepage.php" method="POST" id="newsinput">
                    <div>
                        <h3>SUBSRCRIBE OUR NEWSLETTER</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam!</p>


                        <input type="text" name="newsemail" placeholder="Your Email here">
                        <br><br>

                        <input type="submit" value="submit" name="submit" id="newsbtn">
                        <!-- <div id="newspopup">
                            
                                <div id="emaildisplay"><?php echo "<h2>Thank you! Newsletter will be sent to the Email:$newsname</h2>"; ?></div>
                            
                        </div> -->
                    </div>


                </form>
            </div>



        </div>



        <?php include "footer.php"; ?>
    </div>


</body>

<script src="sitejava.js"></script>





</html>