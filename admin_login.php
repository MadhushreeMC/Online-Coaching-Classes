<!DOCTYPE html>
        <html>
            <head>
                <meta charset="UTF-8">
                <title> login page</title>
                <link rel="stylesheet" type="text/css" href="stylesheet1.css">
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
                     $sql="SELECT id FROM admin_login WHERE username='$username' and password='$password'";
                     $result=mysqli_query($con,$sql);
                     $row= mysqli_fetch_array($result,MYSQLI_ASSOC);
                     $count=mysqli_num_rows($result);
                     if($username!=$password)
                     {
                        echo"<script>alert('username and password not match');</script>"; 
                     }
                     if($count==1)
                    {
                        header("location:homepage2.php");
                    }
                   }
 }                
                ?>
            </head>
            <body>
                <form class="" action="admin_login.php" method="post">
                    <div class="container">
                        <label for="">sign in</label>
                        <input type="text" name="Name" placeholder="Name" value="" required>
                        <input type="password" name="password" placeholder="Password" value="" required>
                        
                        <button type="submit" class="btn" name="log">login</button>
                    </div> 
 
           
            <center>
              <p class="para-1"><span style="color:white;">If You Want To GO Back to home page then press below home button</span></p>
             
             <a href="logout.php">Home</a>
        
                </form>
              </center>
            </body>
        </html>
    