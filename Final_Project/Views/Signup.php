
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signup.css">
    <script src="js/signup-action.js"></script>


    <title>Document</title>
</head>

<body >
<?php
include "../controllers/Signup_action.php";
?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST" onsubmit="return isValid()" name="SForm">

<div class="signup">    
    <h1 style="color: white;">Signup Page</h1><br>  
        <label for="fname"> Full Name  :</label>
        <input type="text" id="fname" name="fname" value="<?php echo $full_name;  ?>">
        <span id="fnamejsE" style="color: red;"> * <?php echo $full_nameEr;  ?></span>
        <br>

        <label for="userName">User Name:</label>
        <input type="text" id="Uname" name="username">
        <span id="usernamejsE" style="color: red;"> * <?php echo $User_NameEr;  ?></span>
        <br>
        <label for="Password">Password   :</label>
        <input type="password" id="Pass" name="password">
        <span id="passwordjsE" style="color: red;"> * <?php echo $User_PasswordEr;  ?></span>
        <br>
        <label for="Rule">Rule   :</label>
        <select  name="rule" id="Rule">
            <option value="">Select one</option>
            <option value="Admin">Admin</option>
            <option value="Buyer">Buyer</option>
            <option value="Seller">Seller</option>
            <option value="Buyer">Tenat</option>

        </select><span id="rulejsE" style="color: red;"> * <?php echo $User_RuleEr;  ?></span>
        <br>
        <input type="submit" name="submit" id="log" value="Register"> <br> <br>
  <h4 style="display: inline; color:whitesmoke"> Already Have an account ?</h4> <a href="./Login.php">Sign In</a>
</div>
    

    <br>

</form>

</div>    
<span><?php echo $successMesg ?></span>
<span><?php echo $errorMesg ?></span>
<?php

?>

</body>

</html>
