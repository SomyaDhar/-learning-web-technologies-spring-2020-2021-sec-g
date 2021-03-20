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
			<td>Action</td>
		</tr>
		<?php

		$path= mysqli_connect('localhost','root','','web_user_mgt');
    	$sql="select * from userlist";
       	$result= mysqli_query($path,$sql);

		 while ($row = mysqli_fetch_assoc($result))
        {
			echo "<tr>";
			
			
			echo "<td>"; echo $row['username'];  echo "</td>";
			echo "<td>"; echo $row['username'];  echo "</td>";
			echo "<td>"; echo $row['email'];     echo "</td>"; 
	    	echo '
	   
		   <td>
			   <a href="edit.php?id=1"> EDIT</a> |
			   <a href="delete.php?id=1"> DELETE</a>
		   </td>
	  		 </tr>';
        }	

		?>

		
		
	</table>

<?php
	include('footer.php');
?>