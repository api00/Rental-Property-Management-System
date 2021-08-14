<?php
session_start();
if(!isset($_SESSION["username"]))
{
    header("Location: ./Login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/user-action.js"></script>
    <title>Document</title>
    <style>
       
        input[type=text], select {
  width: 30%;
  margin: 0 auto;
  padding: 12px 20px;
  margin: 8px 0;
 
}
        input[type=number] {
  width: 30%;
  margin: 0 auto;
  padding: 12px 20px;
  margin: 8px 0;
 
}
.user-search{
    width: 80%;
    margin: 0 auto;
    text-transform: uppercase;
    font-family: 'Roboto', sans-serif;
    font-weight: 400;
}
fieldset{
    margin-top: 10px;
}
.Search{
    font-size: 18px;
    color: whitesmoke;
    border: 1px solid black;
    margin-top: 10px;
    display: inline-block;
    margin: 10px;
    padding: 10px;
    text-transform: uppercase;
    font-family: 'Roboto', sans-serif;
    font-weight: 900;
    cursor:pointer;
    background-color: brown;
    
}
    </style>
 
</head>
<body style="background-color:antiquewhite ">

<?php 
require "../controllers/includes/header.php";
require "../controllers/includes/sidebar_links.php";

?>
<div class="user-search">
<form action="../controllers/user-action.php" method="GET" name="Sform" onsubmit="Result(this); return false;">
    <fieldset>
        <legend>View User Details</legend>
        <label for="username">User Name :</label>
        <input type="text" id="username" name="username" >

        <br> <br>
        <input type="submit" class="Search" name="submit" value="Search">  <br> <br>
        <div id="result"><b>Person info will be listed here...</b></div>



</form>

</div>

</fieldset>


<script >
                  function Result(pform) {
    var xhttp = new XMLHttpRequest();
    xhttp.onload = function(){
      document.getElementById("result").innerHTML=this.responseText;
    }
    xhttp.open("GET",pform.action + "?username=" +pform.username.value);
    // xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send();
       }
              </script>
<?php
include "../controllers/user-action.php";
require "../controllers/includes/footer.php";

?>

</body>
</html>