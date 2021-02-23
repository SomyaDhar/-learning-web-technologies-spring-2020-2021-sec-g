<?php
        $pass=""
        $pass1="";
    

	if(isset($_POST['submit'])){

		if(empty($_POST["pass"]))
		 {
			 $pass="[Insert Password ]";
		 }
		 elseif (strlen($_POST["pass"])<8) {
		 	$pass=["[Password must not be less than eight (8) characters"];
		 }
		 elseif(!strpos($_POST["pass"],"#"))
		 {
			 $pass=[" Password must contain at least one of the special characters (@, #, $, %)"];
		 }
         elseif(!is_numeric($_POST["Password"]))
		 {
			 $password=["Password must contain at least one Numeric values"];
		 }
		
		 elseif(!ctype_upper($_POST["pass"]))
		 {
			 $err_pass=["Password must contain at least one UpperCase values"];
		 }
		 elseif(!ctype_lower($_POST["pass"]))
		 {
			 $pass=["Password must contain at least one LowerCase values"];
		 }

		
		 else
		 {
			 $pass=$_POST["pass"];
         }

            
		if(empty($_POST["pass"])){
            $pass1="Enter again";
                
        }
        else if($_POST["cpass"]!=$pass){
             $pass1="Password did not match";
        }


	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Password Input field</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>CHANGE PASSWORD</legend>
            Current Password  :  <input type="password" name="password" placeholder ="Password">  <br> <br>
            New Password  :  <input type="password" name="password" placeholder ="Password"> <span><?php echo $pass;?></span> <br> <br>
            Retype New Password  :  <input type="password" name="password" placeholder ="Password"> <span><?php echo $pass1;?></span> <br> <br>
            <br><input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body> 
</html>