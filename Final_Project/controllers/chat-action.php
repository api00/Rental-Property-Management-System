
<?php 
  
 
  $messageEr = '';
$message = "";
include "../DB/dbinsert.php";


if ($_SERVER["REQUEST_METHOD"] == "GET") {

  
    
    



if(isset($_GET['user'])){
 
    
    switch($_GET['submit']){
        case "SendMessage":
            addv(input($_GET["message"]),$_GET['user']);
            break;
        
        case "getChat": 
            $s =s();
            foreach($s as $r){   
                echo " <strong>";
            echo $r['user'];
            echo "says :";
            echo $r['message'];
            echo " </strong>";
            echo "</br>";
          
            }
            break;

        }
}



  
}



function input($data)
{
  $data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}




?>
<?php


?>