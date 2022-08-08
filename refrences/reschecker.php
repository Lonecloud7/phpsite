<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="input.php" method="get">
      <label for="">name</label>
      <input type="text" name="name" value=""><br>
      <label for="">username</label>
      <input type="text" name="username" value="">

      <button>submit</button>

    </form>

    your name is: <?php echo $_GET["name"]; echo "<br>"; ?>
    your username is: <?php echo $_GET["username"];?>

    <form class="" action="input.php" method="POST">
      <label for="">username</label>
      <input type="text" name="username2" value="" placeholder="enter name here"><br>
      <label for="">password</label>
      <input type="password" name="password2" value="" placeholder="enter password here">
      <br><br>

      <input type="submit" name="submit" value="register here">

    </form>


  </body>


<br>

<?php

  $username2=$_POST["username2"];
  $password2=$_POST["password2"];
  echo "<br><br>";

  echo "your username is: $username2"; echo"<br>";
  echo "your password is: $password2"; echo"<br>";
  echo"please note: your password is a secret";
  echo"<br>"
 ?>

 <?php
echo"<br>";
 function getnum($num1,$num2,$num3){

   if ($num1 > $num2) {
     return $num1;
   }
   else if($num2 > $num1){
     return $num2;
   }

  else{
       return $num3;
     }
   }

 echo getnum(45,56,78) ?>

 <?php

$fruits=array("mangos", "orange", "watermelon", "tomato", "kiwi");

$items=["shoe", "eeg", "watch", "paper", "phone"];

echo"<br>";
echo count($items);



echo $fruits[3]="corn";
echo"<br>";
echo $fruits[3];
  ?>

<!-- ASSOCIATIE ARRAY -->
  <form class="" action="input.php" method="POST">
    <label for="">name</label>
    <input type="text" name="student" placeholder="check your result">
    <br>
    <input type="submit" name="" value="check result">
  </form>

  <?php
$grades = array("Angela"=>"A", "jason"=>"D", "jake"=>"F", "jenny"=>"C", "ben"=>"A-");

echo $grades[$_POST["student"]];

echo "<br><br>";

   ?>

<!-- CALOCULATOR APP -->
   <form class="" action="input.php" method="GET">
     <h2>CALCULATOR APP</h2>
     <input type="number" name="number1" ><br>
     <input type="number" name="number2" ><br>
     <input type="submit" value="calculate">

   </form>

   <?php
   echo $_GET["number1"] * $_GET["number2"];

   echo "<br><br>"?>

<?php 

echo "yes PHP works on visual studio"

?>

   

</html>
