<?php
	$title = "User List Page";
	session_start();
	$_SESSION['flag'] = true;
	include('header.php');
	
?>

	<a href="home.php">Back</a> |
	<a href="../controller/logout.php">logout</a>	
	<br>
	
	<h1>User list</h1>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>NAME</td>
			<td>EMAIL</td>
			<td>ACTION</td>
		</tr>
		<?php

		$userArr = file_get_contents('../model/arr_list.json');
		$userArr = json_decode($userArr);
		foreach($userArr as $user)
		{
			
			echo "<tr>";
			
			
				 echo "<td>"; echo $user->username;  echo "</td>";
				 echo "<td>"; echo $user->username;  echo "</td>";
				 echo "<td>"; echo $user->email; echo "</td>"; 
			echo '
			
				<td>
					<a href="edit.php?id=1"> EDIT</a> |
					<a href="delete.php?id=1"> DELETE</a>
				</td>
			</tr>
			
			
			';

		}	

		?>

		
		
	</table>

<?php
	include('footer.php');
?>