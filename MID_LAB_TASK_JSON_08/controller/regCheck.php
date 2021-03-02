<?php
	session_start();

	if(isset($_POST['signup'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
		$email = $_POST['email'];

		if($username == "" || $password == "" || $email == ""){
			echo "null value found...";
		}else{
			if($password == $repass){

				$user = ['username'=> $username, 'password'=> $password, 'email'=>$email];

				//$_SESSION['username'] = $username;
				//$_SESSION['password'] = $password;
				if(filesize('../model/arr_list.json')!=0)
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
					$userA = file_get_contents('../model/arr_list.json');
					$temp = json_decode($userA);
					array_push($temp, $user);
					$Data = json_encode($temp);
					file_put_contents('../model/arr_list.json', $Data);
				}

				header('location: ../view/login.html');
			}else{
				echo "password & confirm password mismatch...";
			}
		}
	}


?>