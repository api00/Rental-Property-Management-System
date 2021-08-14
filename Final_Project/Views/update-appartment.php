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
    <script src="js/update-apartment-action.js"></script>
    <title>Document</title>
</head>
<body>

<?php 
require "../controllers/includes/header.php";
require "../controllers/includes/sidebar_links.php";
?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
<h2 style="text-align: center; color:aquamarine; background-color:blueviolet">Update Appartment Details</h2>
    <fieldset>
        <legend> Applicant Details</legend>
        <label for="Aid">Applicant ID</label>
        <input type="number" name="Aid">  <br>
        <label for="Aname">Applicant Name</label>
        <input type="text" name="Aname"> <br>
        <label for="Aemail">Applicant Email</label>
        <input type="text" name="Aemail"> <br>
        <label for="Aphone">Applicant Cell No.</label>
        <input type="text" name="Aphone"> <br>
    </fieldset>
    <fieldset>
        <legend> Apartment Details</legend>
        <label for="A_pname"> Name Of Project</label>
        <input type="text" name="A_pname"> <br>
        <label for="A_buliding">Apartment Building No.</label>
        <input type="text" name="A_buliding"> <br>
        <label for="A_area">Apartment Area</label>
        <input type="text" name="A_area"> <br>
        <label for="A_price">Apartment Price</label>
        <input type="number" name="A_price"> <br>
    </fieldset>
    <input type="submit" name="submit" value="Update"> <br> <br>
</fieldset>
<?php require "../controllers/includes/footer.php";
 ?>
     <?php include "../controllers/update-appartment-action.php"; ?>


</body>
</html>