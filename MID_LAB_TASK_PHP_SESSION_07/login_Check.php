<?php
    session_start();
    if(isset($_POST['submit']))
    {
        $username = $_POST['uname'];
        $password = $_POST['upassword'];
        if ($username=="" || $password=="")
        {
            echo " Null ";
        }
        else
        {
            if($_SESSION['username']==$username && $_SESSION['password']==$password)
            {
                echo "Sussessfully Valid User";
                header('location: dashboard.php');
            }
            else 
            {
                echo"Invalid ";
            }
            
        }
        
       
        
       
}
?>




