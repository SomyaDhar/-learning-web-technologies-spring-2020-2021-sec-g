<?php
	$title = "User List Page";
	
	
?>

	<a href="Add.php">Back</a> |
	
	<fieldset>

        <legend><b> Display  </b></legend>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>NAME</td>
			<td>Profit</td>
			<td>Action</td>
		</tr>
		<?php

		require_once('../model/userModel.php');

		$userArr=  getAllproduct();

		foreach($userArr as $user)
		{
			
			echo "<tr>";
			
			$profit= $user['sellPrice']-$user['buyPrice'];
				 echo "<td>"; echo $user['id'];  echo "</td>";
				 echo "<td>"; echo $user['name'];  echo "</td>";
				 echo "<td>"; echo $profit; echo "</td>"; 
				 echo "
	   
				 <td>
					 <a href='edit.php?id={$user['id']}'> EDIT</a> |
					 <a href='../controller/delete.php?id={$user['id']}'> DELETE</a>
				 </td>
					 </tr>";
			
			
			

		}	

		?>

		
		
	</table>
	</fieldset>

<?php
	include('footer.php');
?>