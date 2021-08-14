<?php

include "../DB/dbinsert.php";

$A_nameEr = $A_idEr = $A_emailEr = $A_phoneEr = $A_buildEr = $A_areaEr=  $A_priceEr = $A_Id = $Ap_nameEr = '';
$flag = false;
$successMesg = $errorMesg = "";
$A_Name = $A_Email = $A_Phone = $A_Build = $A_Area =$A_Price = $Ap_Name = $Aid  = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {






    if (empty($_POST["Aname"])) {

        $A_nameEr = "Applicant Name is required";
        $flag = true;
    }
    if (empty($_POST["Aid"])) {

        $A_idEr = "Applicant ID is required";
        $flag = true;
    }

    if (empty($_POST["Aemail"])) {

        $A_emailEr = "Email is required ";
        $flag = true;
    }



    if (empty($_POST["Aphone"])) {
        $A_phoneEr = "Number is required";
        $flag = true;
    }

    if (empty($_POST["A_buliding"])) {
        $A_buildEr = " Apartment building required";
        $flag = true;
    }
    if (empty($_POST["A_area"])) {
        $A_areaEr = "Area name required";
        $flag = true;
    }
    if (empty($_POST["A_price"])) {
        $A_priceEr = "Price must be required";
        $flag = true;
    }
    if (empty($_POST["A_pname"])) {
        $Ap_nameEr = "Apartment name  required";
        $flag = true;
    }

    if (!$flag) {
        
    $A_Name = input($_POST["Aname"]);
    $A_Id = input($_POST["Aid"]);
    $A_Email  = input($_POST["Aemail"]);
    $A_Phone = input($_POST["Aphone"]);
    $A_Build = input($_POST["A_buliding"]);
    $A_Area = input($_POST["A_area"]);
    $A_Price = input($_POST["A_price"]);
    $Ap_Name = input($_POST["A_pname"]); //Apartment NAme

        $result=addApartment($A_Id,$A_Name,$A_Email,$A_Phone,$A_Build,$A_Area,$A_Price,$Ap_Name);

        if ($result) {
            $successMesg = " Succesfully Saved";
        } else {
            $errorMesg = "Error While saving";
        }
    }
}


function input($v)
{
    $v = htmlspecialchars($v);
    $v = trim($v);
    $v = stripslashes($v);
    return $v;
}
function write($value)
{
    $fileName = "../Views/apartment.json";
    $resors = fopen($fileName, "w");
    $fileWrite = fwrite($resors, $value);
    fclose($resors);
    return $fileWrite;
}
function read()
{
    $fileName = "../Views/apartment.json";
    $fileSize = filesize($fileName);
    $fr = "";
    if ($fileSize > 0) {
        $resource = fopen($fileName, "r");
        $fr = fread($resource, $fileSize);
        fclose($resource);
        return $fr;
    }
}

?>