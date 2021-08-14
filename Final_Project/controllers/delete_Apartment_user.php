
<?php 

require_once '../DB/dbdelete.php';

if (deleteApartment($_GET['id'])) {
    header('Location: ../Views/show-appartment.php');
}

 ?>

?>