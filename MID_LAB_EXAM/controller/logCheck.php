<?php

	session_start();

	if(isset($_POST['submit'])){
		$userArr = file_get_contents('../model/user.json');
        $userArr = json_decode($users);

		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == "" || $password == ""){
			echo "null input...";
		}else{

			foreach($userArr as $user)
            {
                if($user->Id == $username && $user->password == $password){
                    echo "Logged in";
					$_SESSION['flag'] = true;
                    break;
                }
                
            }			
			if($_SESSION['flag'] == true){
				
				header('location: ../view/user_home.php');
			}else{
				echo "invalid user...";
			}
		}
	}


?>