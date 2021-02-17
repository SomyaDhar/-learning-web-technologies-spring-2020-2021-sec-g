<?php 
            $s=0;

            for ( $i=0; $i<=3; $i++)
            {
                for ( $j=0; $j<$s; $j++)
                {
                echo "*";
                }
                $s++;
               
                echo "<br>";

            }


              $num=3;  
            for ( $k=0; $k<=3; $k++)
            {
                for ( $j=1; $j<=$num; $j++)
                {
                echo $j;
                }
                $num--;
               
                echo "<br>";

            }
           
            $n=1;
            $p=1;
            for ($i=1; $i<=3; $i++)	
            {	 
            for($j=$p;$j<=$n;$j++)	  
            {	  	
            echo chr(64+$j)." ";	 
            }	  
            $p++;	
            echo "<br>";   	
            $n+=2;
            }  

   
           
?>