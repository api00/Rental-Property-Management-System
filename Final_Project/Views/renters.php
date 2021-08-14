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
    <script src="js/renters-action.js"></script>
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
.renters-container{
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
  include "../controllers/renters-action.php";
require "../controllers/includes/header.php";
require "../controllers/includes/sidebar_links.php";

?>
<div class="renters-container">
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" onsubmit="return isValid()" name="RForm">
<h2 style="text-align: center; color:aquamarine; background-color:blueviolet">Rental Application</h2>
    <fieldset>
        <legend> Applicant Details</legend>
        <label for="Aid">Applicant ID</label>
        <input type="number" name="Aid"> <span id="AidjsE" style="color: red;"> * <?php echo $A_idEr  ?></span> <br>
        <label for="Aname">Applicant Name</label>
        <input type="text" name="Aname"> <span id="AnamejsE" style="color: red;"> * <?php echo $A_nameEr  ?></span> <br>
        <label for="Aemail">Applicant Email</label>
        <input type="text" name="Aemail"><span id="AemailjsE" style="color: red;"> * <?php echo $A_emailEr  ?></span> <br>
        <label for="Aphone">Applicant Phone No.</label>
        <input type="text" name="Aphone"><span id="AphonejsE" style="color: red;"> * <?php echo $A_phoneEr  ?></span> <br>
   
  
   
        
        <label for="P_adress"> Present Address</label>
        <input type="text" name="P_adress"> <span id="P_adressjsE" style="color: red;"> * <?php echo $P_adressEr  ?></span><br>
        <label for="Pr_address">How long in previous Address</label>
        <input type="text" name="Pr_address"><span id="Pr_addressjsE" style="color: red;"> * <?php echo $Pr_addressEr  ?></span> <br>
        <label for="S_income">Source of Income</label>
        <input type="text" name="S_income"><span id="S_incomejsE" style="color: red;"> * <?php echo $S_incomeEr  ?></span> <br>
        <label for="M_income">Monthly income</label>
        <input type="number" name="M_income"><span id="M_incomejsE" style="color: red;"> * <?php echo $M_incomeEr  ?></span> <br>
    </fieldset>
    <input type="submit" class="add" name="submit" value="Add"> <br> <br>

    <a href="show-renters.php">Show All Renters</a> 
    <!-- <a href="update-appartment.php">Update</a> 
    <a href="delete-appartment.php">Delete</a>  -->

</form>
</div>

<?php require "../controllers/includes/footer.php";?>

</body>
</html>