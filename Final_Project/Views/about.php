
<?php
session_start();
if(!isset($_SESSION["username"]))
{
    header("Location: ./Login.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/about.css">
    <title>Document</title>
  
</head>
<body style="background-color:antiquewhite ">
<div class="about">
<h1> Customer </h1>
<p><b><u><h4><body>For the respective customers</h4></u></b>
Dear Customer,<br> This is a Poparty management website. In this page people who are looking for best and good looking  apartment to Buy and sell and the people who want poperty for rent then this website is the best choice for them  . <br>
Anyone can search Apartment, Buy apartment, Sell a appartment, and also be Tanter <br>
We provide Provide heavy secure and trusted service  .<br>

Thank you.</p>
<br><br><a href = "home.php" class="home-link"><b>Go back</b></a>
</div>





</body>
</html>