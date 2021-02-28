<?php 
    if(isset($_POST['submit'])){
        if(empty($_POST['name'])){
            echo"Please Enter Name <br>";
        }
        if(empty($_POST['email'])){
            echo"Please Enter email <br>";
        }
        if(empty($_POST['uname'])){
            echo"Please Enter user name <br>";
        } 
        if(empty($_POST['pass'])){
            echo"Please Enter password <br>";
        }
        elseif (!empty($_POST['pass'])) {
            $pass=$_POST['pass'];
            if ( strpos($pass, '@') || strpos($pass, '#') || strpos($pass, '$') || strpos($pass, '%')){
                echo " ";
            }
            else {
                echo "Password must contain at least one of the special characters (@, #, $, %)<br>";
            }
            if (empty($_POST['conPass'])) {
                echo "please fillup confirm password field<br>";
            }
            elseif (!empty($_POST['conPass'])) {
                if($pass!=$_POST['conPass']){
                    echo "Password and Confirm password mismatch<br>";
                }
            }
        }
        if (empty($_POST['gender'])) {
            echo"please select your gender<br>";
        }
        if (empty($_POST['date'] && $_POST['month'] && $_POST['year'])) {
            echo"please select a date, month and year<br>";
        }
        if (!empty($_POST['uname']))
         {
             echo"form submitted successfully<br>";
             }
             else {
                echo"Please Enter Name uname <br>";
            }
        
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Registration Form</title>
</head>
<body>
    <form method="POST" action="">
        <fieldset style="width: 400px;">
            <legend><b>REGISTRATION</b></legend>
            <table border="0">
                <tr>
                    <td>Name</td>
                    <td>:
                        <input type="text" name="name" id="">
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:
                        <input type="email" name="email" id="">
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
                <tr>
                    <td>User Name</td>
                    <td>:
                        <input type="text" name="uname" id="">
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:
                        <input type="password" name="pass" id="">
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
                <tr>
                    <td>Confirm Password</td>
                    <td>:
                        <input type="password" name="conPass" id="">
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <fieldset>
                            <legend>Gender</legend>
                            <input type="radio" name="gender" id="">Male
                            <input type="radio" name="gender" id="">Female
                            <input type="radio" name="gender" id="">Other
                        </fieldset>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <fieldset>
                            <legend>Date Of Birth</legend>
                            <input type="tel" name="date" id="" size="1">/
                            <input type="tel" name="month" id="" size="1">/
                            <input type="tel" name="year" id="" size="1"> <i>(dd/mm/yy)</i>
                        </fieldset>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Submit">
                        <input type="reset" value="reset">
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>