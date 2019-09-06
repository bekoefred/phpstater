<!Doctype html>
<html>
<title></title>
<head>
  <h1>welcome To ICT 311</h1>
</head>
<body>
</body>
</html>
<?php
echo "Hello World<br>";

echo "Thank you<br><br>";
$color="red";
echo"my house is $color";
$x=5;
$y=10;
$z=$x+$y;
echo $z;

function myTest(){
    global $x,$y;
    $y=$x+$y;
    echo"<p> Testing local variables</p>";
}
myTest();
echo"The local variable is $y";
?>