<!DOCTYPE html>
        <html>
            <head>
                <meta charset="UTF-8">
                <title> adding page</title>
                <link rel="stylesheet" type="text/css" href="stylesheet9.css">
                <?php
                session_start();
              
                $servername="localhost";
                $username="";
                $email="";
                $password="";
                $db="coachingclases";
                $errors=array();
                $con = mysqli_connect("localhost","root","","coachingclases");
                if(isset($_POST['log']))
                {
                     $teachername = mysqli_real_escape_string($con,$_POST['teachername']);
                    $email = mysqli_real_escape_string($con,$_POST['email']);
  
                     
                      $subject = mysqli_real_escape_string($con,$_POST['subject']);
                     $phonenumber = mysqli_real_escape_string($con,$_POST['phonenumber']);
                   if($teachername!="" &&  $email!="" &&  $subject!="")
                   {
                     $sql= "INSERT INTO teacher_login1(teachername,email, subject,phonenumber) VALUES('$teachername','$email', '$subject','$phonenumber')";
                     mysqli_query($con, $sql);
                     //$result = mysqli_query($con, $sql);
            
                      $_SESSION['teachername']= $teachername;
                    
                    echo"<script>alert('added successfully');</script>";  
                    
                   }
 }                
                ?>
            </head>
            <body>
                <form class="" action="addtt.php" method="post">
                    <div class="container">
                        <label for="">Fill It</label>
                         <input type="text" name="teachername" placeholder="teachername" value="" required>
                        <input type="email" pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$" name="email" placeholder="email" value="" required>
                        <input type="subject"  name="subject" placeholder="subject" value="" required>
                        <input type="phonenumber" pattern="^\d{10}$" name="phonenumber" placeholder="phonenumber" value="" required>
                        <button type="submit" class="btn" name="log">add</button>
                    </div> 
                </form>
                  <br><br><br> <center><br>
        
             
             <a <span style="color:blue;" href="logout2.php">Logout</span></a>
        </center>
            </body>
        </html>