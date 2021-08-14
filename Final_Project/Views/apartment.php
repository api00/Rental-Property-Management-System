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
    <script src="js/apartment-action.js"></script>
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
.apartment-container{
    width: 50%;
    margin: 0 auto;
    text-transform: uppercase;
    font-family: 'Roboto', sans-serif;
    font-weight: 400;
}
fieldset{
    margin-top: 10px;
}
.add{
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
include "../controllers/apartment-action.php";
require "../controllers/includes/header.php";
require "../controllers/includes/sidebar_links.php";
?>
<div class="apartment-container">
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" onsubmit="return isValid()" name="AForm">
<h2 style="text-align: center; color:aquamarine; background-color:blueviolet">Add New Appartment</h2>
    <fieldset>
        <legend> Applicant Details</legend>
        <label for="Aid">Applicant ID</label>
        <input type="number" name="Aid">  <span id="AidjsE" style="color: red;"> * <?php echo $A_idEr  ?></span> <br>
        <label for="Aname">Applicant Name</label>
        <input type="text" name="Aname">  <span id="AnamejsE" style="color: red;"> * <?php echo $A_nameEr  ?></span> <br>
        <label for="Aemail">Applicant Email</label>
        <input type="text" name="Aemail">  <span id="AemailjsE" style="color: red;"> * <?php echo $A_emailEr  ?></span> <br>
        <label for="Aphone">Applicant Cell No.</label>
        <input type="text" name="Aphone">  <span id="AphonejsE" style="color: red;"> * <?php echo $A_phoneEr ?></span> <br>
    </fieldset>
    <fieldset>
        <legend> Apartment Details</legend>
        <label for="A_pname"> Name Of Project</label>
        <input type="text" name="A_pname">  <span id="A_pnamejsE" style="color: red;"> * <?php echo $Ap_nameEr ?></span> <br>
        <label for="A_buliding">Apartment Building No.</label>
        <input type="text" name="A_buliding">  <span id="A_bulidingjsE" style="color: red;"> * <?php echo $A_buildEr ?></span> <br>
        <label for="A_area">Apartment Area</label>
        <input type="text" name="A_area">  <span id="A_areajsE" style="color: red;"> * <?php echo $A_areaEr ?></span> <br>
        <label for="A_price">Apartment Price</label>
        <input type="number" name="A_price">  <span id="A_pricejsE" style="color: red;"> * <?php echo $A_priceEr ?></span> <br>
    </fieldset>
    <input type="submit" class="add" name="submit" value="Add"> <br> <br>
    <a href="show-appartment.php">Show All Apartments</a> 

    <!-- <a href="update-appartment.php">Update</a> 
    <a href="delete-appartment.php">Delete</a>  -->

</form>
</div>
<?php require "../controllers/includes/footer.php" ?>
</body>
</html>