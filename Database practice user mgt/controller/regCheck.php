<?php
	session_start();

	if(isset($_POST['signup'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
		$email = $_POST['email'];

		if($username == "" || $password == "" || $email == ""){
			echo "null value found";
		}
		else
		{

			if($password == $repass)
			{
				$path=mysqli_connect('localhost', 'root', '', 'web_user_mgt');

				
				/*if(filesize('../model/arr_list.json')!=0)
				{
					$userArr = file_get_contents('../model/arr_list.json');
        			$userArr = json_decode($users);
					foreach($userArr as $user)
					{
						if($user->username == $username && $user->password == $password)
						{
                   			echo "Already registarted";
							break;
                		}
                
            		}
					
				}
				else{
					$sql="insert into user values('','$username','$email', '$password')";
					$result=mysqli_query($conn, $sql);

				}*/

				$sql="insert into userlist values('','$username', '$repass','$email')";
				$effect=mysqli_query($path, $sql);

				header('location: ../view/login.html');
			}
			else
			{
				echo "password & confirm password mismatch...";
			}
		}
	}


?>