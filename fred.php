<?php
$result = 0;
//if statements
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
$num1 = $_POST["num1"];
$op = $_POST["op"];
$num2 = $_POST["num2"];

if($op == "+")
{
$result = $num1 + $num2;
}
//else if statements
else if($op == "-")
{
$result = $num1 - $num2;
}
//end statement
else if($op == "/")
{
$result = $num1 / $num2;
}
else if($op == "*")
{
$result = $num1 * $num2;
}
else if($op == "%")
{
$result = $num1 % $num2;
}
}

 ?>
 <!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <link href="style.css" type="text/css"  rel="stylesheet">
    <meta charset="utf-8">
    <title></title>
  </head>

  <body>
<div  class="myl">
<label><?=$result?></label>
</div>
  <div class="text_center">
    <br><br><br><br><br>
  <form method="post">
    <input type ="text" name ="num1" placeholder="Enter first number"><br>
    <input type ="text" name ="op" placeholder="Enter operator +,-.x,/,%"><br>
    <input type ="text" name ="num2" placeholder="Enter second number"><br>
    <button type"submit">calculate</button><br>

  </form>

    </div>

  </body>
</html>
