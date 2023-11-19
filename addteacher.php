
<!DOCTYPE html>
<html>
    <head>
          <meta charset="UTF-8">
        <title>User registration system </title>
        <link rel="stylesheet" type="text/css" href="style.css">
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
                     $sql="INSERT into teacher_login WHERE username='$username' and password='$password'";
                     $result=mysqli_query($con,$sql);
                     $row= mysqli_fetch_array($result,MYSQLI_ASSOC);
                     $count=mysqli_num_rows($result);
                     if($username!=$password)
                     {
                        echo"<script>alert('username and password not match');</script>"; 
                     }
}
}
?>
    </head>
    <body>
        <div class="header">
            <h2>Add Teachers</h2>
        </div>
        <form method="post" action="addteacher.php">
            <div class="input-group">
                <label>username</label>
                <input type="text" name="username">
            </div> 
            
             <div class="input-group">
                <label>Password</label>
                <input type="password" name="password">
            </div> 
             <div class="input-group">
                 <button type="submit" name="Add" class="btn">Add</button>
            </div> 
            
        </form>
       <center>
        <p class="para-1"><span style="color:white;">If You Want To GO Back to home page then press below home button</span></p>
             
             <a <span style="color:blue;" href="logout.php">Home</span></a>
        </center>
    </body>
</html>