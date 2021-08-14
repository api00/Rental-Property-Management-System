<?php

function connect(){
    $conn = new mysqli("localhost","root","","user");
if($conn->connect_errno){
    die("Failed To Connect");
   
}
return $conn;

}




?>