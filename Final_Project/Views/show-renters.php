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
#renter-details {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#renter-details td, #renter-details th {
  border: 1px solid #ddd;
  padding: 8px;
}
#renter-details tr{
	transition: all 0.6s;
}

#renter-details tr:nth-child(even){background-color: #f2f2f2;}

#renter-details tr:hover {background-color: #ddd;}

#renter-details th {
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
    $sql =$conn->prepare("SELECT * FROM renters_details");
    $sql->execute();
    $result=$sql->get_result(); ?>
<table id="renter-details">
	<thead>
		<tr style="padding:5px; background-color:yellow;">
			<th style="margin:5px;">Applicant ID</th>
			<th > Applicant Name</th>
			<th>Applicant Email</th>
			<th>Applicant Cell No.</th>
			<th>Present Address</th>
			<th>How long in previous Address</th>
            <th>Source of Income</th>
			<th>Monthly income</th>
            

		</tr>
	</thead>
	<tbody>
		<?php    foreach($result as $value):?>
			<tr>
            <td><?php echo $value['A_Id'] ?></td>
            <td><?php echo $value['A_Name'] ?></td>
				
				<td><?php echo $value['A_Email']?></td>
				<td><?php echo $value['Aphone']?></td>
				<td><?php echo $value['P_address'] ?></td>
                <td><?php echo $value["Pr_address"] ?></td>

                <td><?php echo $value["S_income"] ?></td>

                <td><?php echo $value["M_Income"] ?></td>
                
				<td><a href="../controllers/delete_renters_user.php?id=<?php echo $value['id'] ?>">delete</a></td>    

				
				
			</tr>
			<?php endforeach ?>
	
		

	</tbody>
	

</table>
<?php require "../controllers/includes/footer.php";
 ?>

</body>
</html>