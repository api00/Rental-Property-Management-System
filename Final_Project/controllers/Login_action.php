<?php
session_start();
 include "../DB/dbread.php";
$username = $password = "";
$Form_name = "";
$From_pass ="";
$flag =false;
$User_passwordEr = "";
$User_NameEr ="";
$User_ruleEr= "";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 
if (empty($_POST["username"])) {
    $User_NameEr = "UserName is required";
    $flag = true;
}

if (empty($_POST["password"])) {
    $User_passwordEr = "password is required";
    $flag = true;
}
if (empty($_POST["rule"])) {
    $User_ruleEr = "rule is required";
    $flag = true;
}

if(!$flag){
    $username =  input($_POST["username"]);
    $password = input($_POST["password"]);
    $rule = input($_POST["rule"]);
    if($rule=='Admin')
    {
      $result =login($username,$password,$rule);
      if($result){
        $_SESSION["username"]=$username;
      header("Location: ../Views/Home.php");
     echo "Success";
      
    }
    else
    {
    echo "<br>";
    echo "Invalid Password ";}
    }
    else{
      echo "invalid rule";
      echo "Only admin can Join to this portal";
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


?>
