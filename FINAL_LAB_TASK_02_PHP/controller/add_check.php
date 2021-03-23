<?php
        //require_once('../Model/db.php');
        require_once('../Model/userModel.php');
        if(isset($_POST["submit"]))
        {
            $name=$_POST["name"];
            $buy=$_POST["buyPrice"];
            $sell=$_POST["sellPrice"]; 
            $display=$_POST["displayable"];
            
            $product = [
                'name'=>$name ,
                'buyPrice'=>$buy,
                'sellPrice'=>$sell,
                'displayable'=>$display
                
                 ];
            $status= insertProduct($product);
            if($status)
            {
                header('location: ../view/Add.php');
            }
            else{
                echo "error..try again";
            }
            
            
        }

?>