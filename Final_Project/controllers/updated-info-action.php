
<?php  
include "../DB/dbinsert.php";


if (isset($_POST['updateapartmentInfo'])) {
    $A_Name = $_POST["Aname"];
    $A_Id = $_POST["Aid"];
    $Id = $_POST["id"];
    $A_Email  = $_POST["Aemail"];
    $A_Phone = $_POST["Aphone"];
    $A_Build = $_POST["A_buliding"];
    $A_Area = $_POST["A_area"];
    $A_Price =$_POST["A_price"];
    $Ap_Name = $_POST["A_pname"];

    $result =updateApartment($A_Id,$A_Name,$A_Email,$A_Phone,$A_Build,$A_Area,$A_Price,$Ap_Name,$Id);

   
       
        header('Location: ../Views/show-appartment.php');
        echo "Hi";
  

}


?>