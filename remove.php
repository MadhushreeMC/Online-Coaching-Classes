<html>
   
   <head>
      <title>Delete a Record from MySQL Database</title>
   </head>
   
   <body>
      <?php
         
           
            
            
            $link = mysqli_connect("localhost", "root", "", "coachingclases");
            
            if( $link== false ) {
               die("Error: Could not connect. ".
               mysqli_connect_error());
            }
				
          
            
            $sql = "DELETE FROM teacher_login1 WHERE teachername = $teachername" ;
           
            if(mysqli_query($link, $sql)){
                echo "records were deleted successfully.";
            }else{
                 echo "Error: Could not able to execute $sql. " .
                 mysqli_error($link);
             }
            
           
            mysqli_close($link);
         
            ?>
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table width = "400" border = "0" cellspacing = "1" 
                     cellpadding = "2">
                     
                     <tr>
                        <td width = "100">teachername</td>
                        <td><input name = "teachername" type = "text" 
                           id = "teachername"></td>
                     </tr>
                     
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                     
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "delete" type = "submit" 
                              id = "delete" value = "Delete">
                        </td>
                     </tr>
                     
                  </table>
               </form>
            <?php
         
      ?>
      
   </body>
</html>