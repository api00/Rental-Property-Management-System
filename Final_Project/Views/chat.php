<?php
session_start();
if(!isset($_SESSION["username"]))
{
    header("Location: ./Login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
#chathistory{
  height: 500px;
  width: 500px;
  background-color: #FAEBD7;
  margin: 0 auto;
  margin-top: 70px;

  padding: 10px;

    font-family: 'Roboto', sans-serif;
    font-weight: 400;
 overflow: hidden;
}
#message{
  width: 420px;
  height: 80px;
  margin-left: 492px;
}
#btn2{
            
  height: 85px;
    font-size: 18px;
    color: whitesmoke;
    font-weight: 400;
    border: 1px solid black;
    margin-bottom: 10px;
    display: inline-block;
    margin: 0 auto;
    padding: 18px;
    text-transform: uppercase;
    font-family: 'Roboto', sans-serif;
    font-weight: 900;
    background-color: brown;
    margin-bottom: 10px;
    position: absolute;
    cursor:pointer;

        }
        #user{
          position: absolute;
          top: 38%;
          left: 33%;
          height: 50px;
          width: 100px;
          text-transform: uppercase;
    font-family: 'Roboto', sans-serif;
    font-weight: 900;
    text-align: center;
        }

        
  </style>
</head>

<body>

  <?php 
require "../controllers/includes/header.php";
require "../controllers/includes/sidebar_links.php";
?>
 
	
	<div class="centeralised">
	<div id="chathistory"></div>
	<div class="chatbox">
		<form action="../controllers/chat-action.php" onsubmit="myFunction(this); return false;" method="GET">
			<input type="text" name="user" id="user" value="<?php echo $_SESSION['username'] ;?>" disabled>
			<textarea class="txtarea" id="message" name="message"></textarea>
      <input type="submit" id="btn2" value="send" id="submit">

		</form>
        <?php require "../controllers/includes/footer.php";
 ?>

	</div>

	</div>


	

	<script>
var action ="../controllers/chat-action.php";
function myFunction(val) {
    let xhttp = new XMLHttpRequest();
    xhttp.onload = function(){
      document.getElementById("chathistory").innerHTML=this.responseText;
    }
    xhttp.open("GET",val.action + "?submit=SendMessage&message=" +val.message.value +"&user=" +val.user.value);
      xhttp.send();
       }
 
function loadChat()
		{
      let xhttp = new XMLHttpRequest();
       xhttp.onload = function(){
       document.getElementById("chathistory").innerHTML=this.responseText;
       }
       xhttp.open("GET", action +"?submit=getChat&user=" + user.value);
        xhttp.send();
    }
		
    setInterval(function(){
    
      loadChat();
}, 2000);



		
	



	</script>


</body>
</html>