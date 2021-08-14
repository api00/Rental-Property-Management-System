<?php

require "dbconnect.php";



function deleteApartment($id)
{
    $conn = connect();
    $sql = $conn->prepare("DELETE FROM apartment_details WHERE id=?");
    $sql->bind_param("s", $id);
    $respone = $sql->execute();
   $sql->close();
    $conn->close();
    return $respone;
}

function deleteRenters($id)
{
    $conn = connect();
    $sql = $conn->prepare("DELETE FROM renters_details WHERE id=?");
    $sql->bind_param("s", $id);
    $respone = $sql->execute();
   $sql->close();
    $conn->close();
    return $respone;
}

