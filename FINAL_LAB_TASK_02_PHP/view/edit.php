<?php
	
	//$id=$_GET['id'];
	require_once('../model/userModel.php');

	//$row = getUserbyId($id);
?>

<html>
<head>
    
    <title>Edit Product </title>
  
       
                            
                            <fieldset>

                                <legend><b> Edit Product  </b></legend>
								<form method="POST" action="../Controller/edit_check.php">
            				Name  <br> <input type ="text" name="name"   > </input><br>
            				Buying Price  <br> <input type ="text"name="buyPrice"> </input><br>
           					 Selling Price   <br> <input type ="text"name="sellPrice"> </input><br>
              				 <input type ="checkbox"name="displayable"> Display </input><br>
                                   
                                  
            				 <input type="submit" name="submit" value="Save">

                            </form>
							</fieldset>

                        
                       
                    
    
    
</body>
</html>