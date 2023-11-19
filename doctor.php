<!DOCTYPE html>
<html>
    <head>
        <title>Login Form</title>
    </head>
    <body>
        <div id="main">
            <h1>Simple Login</h1>
            <form method="POST">
                username<input type="text" name="username" class="text" autocomplete="off" required>
                password<input type="password" name="password" class="text" required>
                <input type="submit" name="submit" id="sub">
            </form>
        </div>
    </body>
</html>

<?php
                $servername="localhost";
                $username="";
               
                $password="";
                $db="coachingclases";
        $con=mysqli_connect("localhost","root","",  "coachingclases");

        if (isset($POST['submit'])){
             $username = mysqli_real_escape_string($con,$_POST['email']);
                    $password = mysqli_real_escape_string($con,$_POST['password']);
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="SELECT id FROM admin_login WHERE username='$username' and password='$password'";
     $result=mysqli_query($con,$sql);
                     $row= mysqli_fetch_array($result,MYSQLI_ASSOC);
                     $count=mysqli_num_rows($result);
    if($row=mysql_fetch_array($sql)){
        if($password==$row['password']){
            header("location:index.php");
            exit();
        }
        else 
            echo "Invalid password";
    }
    else 
        echo"Invalid username";
    
    
}
?>