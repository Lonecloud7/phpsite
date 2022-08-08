<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="advcalc.php" method="POST">
      <h2>ADV CALCULATOR APP</h2>
     Firstnumber: <input type="number" step="0.0001" name="number3" ><br>
      Operator: <input type="text" name="op" ><br>
      second number: <input type="number" step="0.0001" name="number4">

      <button type="button" name="button">Calculator</button>

    </form>

    <?php
    $number3=$_POST["number3"];
    $number4=$_POST["number4"];
    $op=$_POST["op"];

    if($op == "+"){
      echo $number3 + $number4;
    }
    elseif($op == "-"){
      echo $number3 - $number4;
    }
    elseif($op == "/"){
      echo $number3 / $number4;
    }
    elseif($op == "*"){
      echo $number3 * $number4;
    }
    else{
      echo "invalid operator";
    }
    ?>
  </body>
</html>
