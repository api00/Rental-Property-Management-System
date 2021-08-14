<?php
session_start();
if(!isset($_SESSION["username"]))
{
    header("Location: ./Login.php");
}
?>
<?php  

include "../DB/dbconnect.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
#apartment-details {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#apartment-details td, #apartment-details th {
  border: 1px solid #ddd;
  padding: 8px;
}
#apartment-details tr{
	transition: all 0.6s;
}

#apartment-details tr:nth-child(even){background-color: #f2f2f2;}

#apartment-details tr:hover {background-color: #ddd;}

#apartment-details th {
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
?>
<?php $conn=connect();
    $sql =$conn->prepare("SELECT * FROM apartment_details");
    $sql->execute();
    $result=$sql->get_result(); ?>
<table id="apartment-details">
	<thead>
		<tr style="padding:5px; background-color:yellow;">
			<th style="margin:5px;">Applicant ID</th>
			<th > Applicant Name</th>
			<th>Applicant Email</th>
			<th>Applicant Cell No.</th>
			<th>Name Of Project</th>
			<th>Apartment Building No.</th>
            <th>Apartment Area</th>
			<th>Apartment Price</th>
            

		</tr>
	</thead>
	<tbody>
		<?php    foreach($result as $value):?>
			<tr>
            <td><?php echo $value['Aid'] ?></td>
            <td><?php echo $value['Aname'] ?></td>
				
				<td><?php echo $value['Aemail']?></td>
				<td><?php echo $value['Aphone'] ?></td>
                <td><?php echo $value["A_pname"] ?></td>

                <td><?php echo $value["A_buliding"] ?></td>

                <td><?php echo $value["A_area"] ?></td>
                <td><?php echo $value["A_price"]?></td>
                
				<td><a href="../controllers/delete_Apartment_user.php?id=<?php echo $value['id'] ?>" onclick="return confirm('Are you sure want to delete this ?')">delete</a> &nbsp<a href="../controllers/update-apartment-user.php?id=<?php echo $value['id'] ?>">Update</a></td> 
   

				
				
			</tr>
			<?php endforeach ?>
	
		

	</tbody>
	

</table>
<?php require "../controllers/includes/footer.php";
 ?>

</body>
</html>