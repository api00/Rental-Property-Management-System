<?php

require "dbconnect.php";



   function register($full_name, $username, $password, $User_Rule){
       $conn =connect();
    $sql = $conn->prepare("INSERT INTO user (full_name, username, password, rule) VALUES (?, ?, ?, ?)");
    $sql-> bind_param("ssss",$full_name, $username, $password, $User_Rule);
   
   $sql->execute();
   $sql->close();
    $conn->close();
  
}
//    function user($full_name, $username, $password, $User_Rule, $status){
//        $conn =connect();
//     $sql = $conn->prepare("INSERT INTO user (full_name, username, password, rule, status) VALUES (?, ?, ?, ?, ?)");
//     $sql-> bind_param("sssss",$full_name, $username, $password, $User_Rule, $status);
   
//    $sql->execute();
//    $sql->close();
//     $conn->close();
  
// }
function addApartment($Aid,$Aname,$Aemail,$Aphone,$A_buliding,$A_area,$A_price,$A_pname){
    $conn =connect();
 $sql = $conn->prepare("INSERT INTO apartment_details (Aid,Aname,Aemail,Aphone,A_buliding,A_area,A_price,A_pname) VALUES (?,?,?,?,?,?,?,?)");
 $sql-> bind_param("ssssssss",$Aid,$Aname,$Aemail,$Aphone,$A_buliding,$A_area,$A_price,$A_pname);

$sql->execute();
$sql->close();
 $conn->close();

}
function updateApartment($A_Id,$A_Name,$A_Email,$A_Phone,$A_Build,$A_Area,$A_Price,$Ap_Name,$Id){
    $conn =connect();
 $sql = $conn->prepare("UPDATE apartment_details set Aid=?,Aname=?,Aemail=?,Aphone=?,A_buliding=?,A_area=?,A_price=?,A_pname=? where id = ?");
 $sql-> bind_param("ssssssssi",$A_Id,$A_Name,$A_Email,$A_Phone,$A_Build,$A_Area,$A_Price,$Ap_Name,$Id);

$sql->execute();
$sql->close();
 $conn->close();

}


function addRenters($A_Id,$A_Name,$A_Email,$Aphone,$P_address,$Pr_address,$S_income,$M_Income){
    $conn =connect();
 $sql = $conn->prepare("INSERT INTO renters_details (A_Id,A_Name,A_Email,Aphone,P_address,Pr_address,S_income,M_Income) VALUES (?,?,?,?,?,?,?,?)");
 $sql-> bind_param("ssssssss",$A_Id,$A_Name,$A_Email,$Aphone,$P_address,$Pr_address,$S_income,$M_Income);

$sql->execute();
$sql->close();
 $conn->close();

}
function s(){
    $conn=connect();
    $sql =$conn->prepare( "SELECT * FROM chat");
   
    $sql->execute();
    $result=$sql->get_result();
   return $result;
 
}
function addv($message,$user){
    $conn=connect();
    $sql = $conn->prepare('INSERT INTO chat (message,user) VALUES (?,?)');
    $sql->bind_param("ss",$message,$user);


    $sql->execute();
    $sql->close();
    $conn->close();
}


?>