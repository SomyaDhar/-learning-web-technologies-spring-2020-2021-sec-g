
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
</head>
<body>
<table align='center' border="1" width="1100px">
                         <tr>           
                            <th colspan="2"> <img src="logo.png" width=160px height=100px align="left">
                            <p align='right'> Logged in as <?php echo $_SESSION['username'];?>|
                                <a href="LOGIN.php" align='right';>Logout</a> </p>
                            </th>
                            
                        </tr> 
                        <tr> 
                            <td height =200px>   Account <br>
                            <hr>
                            <ul type ='dish'>
                            <li><a href= "dashboard.php"> Dashboard </a></li>
                             <li><a href= "ViewProfile.php"> View Profile </a></li>
                             <li><a href= "EditProfile.php"> Edit Profile </a></li>
                             <li><a href= "Profile_Picture.php"> Change Profile Picture </a></li>
                             <li><a href= "ChangePassword.php"> Change Password </a></li>
                             <li><a href= "LOGIN.php">Logout </a></li>

                            </ul>
                            </td>
                            <td height =200px>
                            <form method="POST" action="">
	<fieldset>
			<legend><b> Change Password </b> </legend>

				Current Password<input type ="text" name="cpassword"> </input><br>
				<font color ="green">New Password</font><input type ="text"name="npassword"> </input><br>
                <font color ="red">Retype Password</font><input type ="text"name="rpassword"> </input><br>


			<br> <br>
						<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
                            </td>
                    
                        <tr>
                        
                    </tr>
                   
        
                    <td colspan="3">
                        <h5 style="text-align: center;">Copyright  @2017</h5>
                    </td>
        </table>


	
</body>
</html>