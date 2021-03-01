<?php
    session_start();
    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
      
        if ($email=="")
        {
            echo "Null ";
        }
        else if ($email==$_SESSION['email'])
        {
           echo "Email sent to  ".$email; 
            
        }
		else
		{
			echo "Sorry Email not found";
		}
        
       
        
       
}
?>




