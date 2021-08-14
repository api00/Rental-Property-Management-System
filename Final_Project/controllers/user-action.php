

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
<body>
    


<?php 


include "../DB/dbread.php";


if(isset($_GET['username'])){
	$allSearchedUsers = searchUser($_GET['username']);
    echo "<table>
<tr>
<th>Full Name</th>
<th>User Name</th>
<th>Rule</th>
<th>current status</th>
<th>status</th>

</tr>";

    echo "<tr>";
    echo "<td>" . $allSearchedUsers['full_name']  . "</td>";
    echo "<td>" . $allSearchedUsers['username']  . "</td>";
    echo "<td>" . $allSearchedUsers['rule'] . "</td>";
    echo "<td>" . $allSearchedUsers['status'] . "</td>";
    // echo "<td>" ;
    // echo "<div id='result'></div>";
    // echo "</td>";
   $val = $allSearchedUsers["user_id"];
    echo "<td>" ;
    ?>

   <select  name="status"  onchange="myFunction(this.value,<?php echo $val ?>)" id="status">;
   <?php 
  
  echo '  <option value="">Select one</option>';
  echo ' <option value="block">Block</option>';
  echo '<option value="active">Active</option>';


  echo '   </select>';
  echo "</tr>";
    return;

}
else{
	
	
}
?>
<script >
                  function myFunction(val,user_id) {
    var xhttp = new XMLHttpRequest();
    xhttp.onload = function(){
      document.getElementById("result").innerHTML=this.responseText;
    }
    xhttp.open("GET","../controllers/change.php?status="+val+"&user_id="+user_id,true);
      xhttp.send();
       }
              </script>
</body>
</html>