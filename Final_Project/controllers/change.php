<?php
include "../DB/dbconnect.php";

$status = $_GET['status'];
$user_id = $_GET['user_id'];


    $conn =connect();
 $sql = $conn->prepare("UPDATE user set status = ? where user_id = ?");
 $sql-> bind_param("si",$status,$user_id);

$sql->execute();
$sql->close();
 $conn->close();


 

return;

?>