<?php
    session_start();
         
?>



<!DOCTYPE html>
<html>
<head>
    
    <title>Profile</title>
  
        <table align='center' border="1" width="1100px">
                         <tr>           
                            <th colspan="2"> <img src="logo.png" width=160px height=100px align="left">
                            <p align='right'>Logged in as <?php echo $_SESSION['username'];?>|
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
                            <fieldset>
			<legend><b> Profile </b> </legend>

				Name   : <?php echo $_SESSION['username'] ?><br><hr>
                
                <img src="user.png" align='right'width=150px height=150px;> </img><br>

                Email    : <?php echo $_SESSION['email'] ?><br><hr>
                Gender  : <?php echo $_SESSION['gender'] ?><br><hr>
                Date Of Birth   : <?php echo $_SESSION['day'] ?> / <?php echo $_SESSION['month'] ?> /<?php echo $_SESSION['year'] ?><br><hr>
                <a href ="EDIT_PROFILE.php">Edit Profile</a><br><br>
                
                <p align='right' ><a href ="ProfilePicture.php" >Change</a></p>

               
                
			<br> <br>
					
		</fieldset>
                            </td>
                    
                        <tr>
                        
                    </tr>
                   
        
                    <td colspan="3">
                        <h6 style="text-align: center;">Copyright  @2021</h6>
                    </td>
        </table>
    
    </form>
</body>
</html>