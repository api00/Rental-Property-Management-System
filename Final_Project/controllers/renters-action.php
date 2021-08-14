<?php 
include "../DB/dbinsert.php";
$A_Name = $A_Email = $A_Phone = $A_Id = $P_address = $Pr_address = $S_income = $M_Income = "";
$A_nameEr = $A_idEr= $A_emailEr = $A_phoneEr =$P_adressEr = $Pr_addressEr = $S_incomeEr = $M_incomeEr = "";
$flag =false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $A_Name = input($_POST["Aname"]);
    $A_Id = input($_POST["Aid"]);
    $A_Email  = input($_POST["Aemail"]);
    $Aphone  = input($_POST["Aphone"]);
    $P_address = input($_POST["P_adress"]);
    $Pr_address = input($_POST["Pr_address"]);
    $S_income = input($_POST["S_income"]);
    $M_Income = input($_POST["M_income"]);

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

if (empty($_POST["P_adress"])) {
    $P_adressEr = " present address required";
    $flag = true;
}
if (empty($_POST["Pr_address"])) {
    $Pr_addressEr = "Previous Address required";
    $flag = true;
}
if (empty($_POST["S_income"])) {
    $S_incomeEr = "Source of income must  be required";
    $flag = true;
}
if (empty($_POST["M_income"])) {
    $M_incomeEr = "monthly income required";
    $flag = true;
}


if (!$flag) {
   
    addRenters($A_Id,$A_Name,$A_Email,$Aphone,$P_address,$Pr_address,$S_income,$M_Income);

}



}

function input($v)
{
    $v = htmlspecialchars($v);
    $v = trim($v);
    $v = stripslashes($v);
    return $v;
}




?>