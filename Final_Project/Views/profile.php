<?php
session_start();
if(!isset($_SESSION["username"]))
{
    header("Location: ./Login.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
#profile-details{
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#profile-details td, #profile-details th {
  border: 1px solid #ddd;
  padding: 8px;
}
#profile-details tr{
	transition: all 0.6s;
}

#profile-details tr:nth-child(even){background-color: #f2f2f2;}

#profile-details tr:hover {background-color: #ddd;}

#profile-details th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: brown;
  color: white;
}
</style>
    
</head>
<body>
        
<?php 
require "../controllers/includes/header.php";
require "../controllers/includes/sidebar_links.php";

    
    include "../DB/dbread.php";
    $allSearchedUsers = searchUser($_SESSION['username']);
    
    ?>
<fieldset>

    <legend>Profile Information</legend>
<div class="profile">
<table id="profile-details">
    <tr>
<th>Full Name</th>
<th>User Name</th>
<th>Rule</th>
<th>status</th>
    </tr>





    <tr>
        <td><?php echo $allSearchedUsers['full_name'] ?></td>
        <td><?php echo $allSearchedUsers['username'] ?> <br></td>
        <td><?php  echo $allSearchedUsers['rule'] ?></td>
        <td><?php echo $allSearchedUsers['status'] ?> <br></td>
    </tr> 
</table>

</div>
</fieldset>
   
<?php require "../controllers/includes/footer.php";
 ?>

</body>

</html>