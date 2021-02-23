<?php

$username="";
$password="";

	if(isset($_POST['submit'])){

		if(empty($_POST["Username"])){
            $username="Insert User name ";
        }
        else if(strlen($_POST["Username"]) < 3){
            $username="User Name must contain at least two (2) characters";
        }
        

        if(empty($_POST["Password"]))
		 {
			 $password="[Insert Password ]";
		 }
		
		 elseif (strlen($_POST["Password"])<8) {
		 	$password=[" Password must not be less than eight (8) characters"];
		 }
		 elseif(!strpos($_POST["Password"],"#"))
		 {
			 $password=["Password must contain at least one of the special characters (@, #, $, %)"];
		 }
		 elseif(!is_numeric($_POST["Password"]))
		 {
			 $password=["Password must contain at least one Numeric values"];
		 }
		 elseif(!ctype_upper($_POST["Password"]))
		 {
			 $password=["Password must contain at least one UpperCase values"];
		 }
		 elseif(!ctype_lower($_POST["Password"]))
		 {
			 $password=["Password must contain at least one LowerCase values"];
		 }

		


	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login input field</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>LOGIN</legend>
			User Name : <input type="text" name="Username" placeholder ="Username"> <span><?php echo $username;?></span><br> <br>
            Password  :  <input type="password" name="Password" placeholder ="Password"> <span><?php echo $password;?></span> <br> <br>
            <input type="checkbox" name="Remember"> Remember Me 
            <input type="submit" name="submit" value="Submit">
            <br><a href="pahe2.html">Forget Password?</a>
		</fieldset>
	</form>
</body> 
</html>