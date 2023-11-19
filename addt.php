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
                    $username = mysqli_real_escape_string($con,$_POST['Name']);
                    $password = mysqli_real_escape_string($con,$_POST['password']);
                     
                   if($username!="" &&  $password!="")
                   {
                     $sql= "INSERT INTO teacher_login(username, password) VALUES('$username', '$password')";
                     mysqli_query($con, $sql);
                     //$result = mysqli_query($con, $sql);
            
                      $_SESSION['username']= $username;
                    
                    echo"<script>alert('added successfully');</script>";  
                    
                   }
 }                
                ?>
            </head>
            <body>
                <form class="" action="addt.php" method="post">
                    <div class="container">
                        <label for="">add form</label>
                        <input type="text" name="Name" placeholder="Name" value="" required>
                        <input type="password" name="password" placeholder="Password" value="" required>
                        
                        <button type="submit" class="btn" name="log">add</button>
                    </div> 
                </form>
                   <center>
        
             
             <a <span style="color:black;" href="logout1.php">Logout</span></a>
        </center>
            </body>
        </html>
    