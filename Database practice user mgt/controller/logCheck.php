<?php

	session_start();

	if(isset($_POST['submit'])){

		$path= mysqli_connect('localhost','root','','web_user_mgt');
        $sql="select * from userlist";
        $result= mysqli_query($path,$sql);

		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == "" || $password == "")
		{
			echo "null input...";
		}
		else
		{

			
			while ($row = mysqli_fetch_assoc($result))
        {
           
                    if ($row['name']==$name && $row['password']==$password )
                    {
						echo "Logged in";
                        $_SESSION['flag'] = true;
                        break;
                    }
                    
                   
                 
                

            }
						
			if($_SESSION['flag'] == true)
			{
				
				header('location: ../view/home.php');
			}
			else
			{
				echo "invalid user...";
				header('location: ../view/login.html');
			}
		}
	}


?>