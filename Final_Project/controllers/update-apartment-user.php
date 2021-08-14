<?php 

include "Apartment-info.php";


$apartmentInfo = featchUpdateApartmentInfo($_GET['id']);




 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
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
.update{
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
<body>

<?php 
require "includes/header.php";
require "includes/sidebar_links.php";
?>
<div class="apartment-container">
 <form action="updated-info-action.php" method="POST" >
<fieldset>
  <legend>Update Apartment Info</legend>
<label for="id">ID:</label><br>
  <input type="text" name="id" value="<?php echo $_GET['id'] ?>"> <br>
 <label for="Aid">Applicant Id:</label><br>
  <input value="<?php echo $apartmentInfo['Aid'] ?>" type="text" id="Aid" name="Aid"><br>
 <label for="Aname">Applicant Name:</label><br>
  <input value="<?php echo $apartmentInfo['Aname'] ?>" type="text" id="Aname" name="Aname"><br>
  <label for="Aemail">Applicant Email:</label><br>
  <input type="text" name="Aemail" value="<?php echo $apartmentInfo['Aemail'] ?>"> <br>
  <label for="Aphone">Applicant Cell No:</label><br>
  <input value="<?php echo $apartmentInfo['Aphone'] ?>" type="text" id="Aphone" name="Aphone"><br>
  <label for="A_pname">Name Of Project:</label><br>
  <input  value="<?php echo $apartmentInfo['A_pname'] ?>" type="text" name="A_pname"><br><br>
  <label for="A_buliding">Apartment Building No.:</label><br>
  <input  value="<?php echo $apartmentInfo['A_buliding'] ?>"type="text" name="A_buliding"><br><br>
  <label for="A_area">Apartment Area:</label><br>
  <input  value="<?php echo $apartmentInfo['A_area'] ?>" type="text" name="A_area"><br><br>
  <label for="A_price">Apartment Price:</label><br>
  <input  value="<?php echo $apartmentInfo['A_price'] ?>" type="text" name="A_price"><br><br>
  <input type="submit" class="update" name = "updateapartmentInfo" value="Update">
</fieldset>

</form> 

</div>
<?php  require "includes/footer.php"; ?>
</body>
</html>

