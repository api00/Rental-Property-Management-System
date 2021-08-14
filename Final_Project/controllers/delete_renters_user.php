
<?php 

require_once '../DB/dbdelete.php';

if (deleteRenters($_GET['id'])) {
    header('Location: ../Views/show-renters.php');
}

 ?>

?>