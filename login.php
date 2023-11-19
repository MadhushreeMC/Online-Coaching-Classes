
<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>User registration system </title>
        <link rel="stylesheet" type="text/css" href="style3.css">
    </head>
    <body>
        <div class="header">
            <h2>S.Login</h2>
        </div>
        <form method="post" action="login.php">
            <?php include('errors.php'); ?>
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username">
            </div> 
            
             <div class="input-group">
                <label>Password</label>
                <input type="password" name="password">
            </div> 
             
             <div class="input-group">
                 <button type="submit" name="login" class="btn">S.Login</button>
            </div> 
            <p>
                Not yet a member? <a href="register.php">Sign up</a>
            </p>
        </form>
        <center>
        <p class="para-1"><span style="color:white;">If You Want To GO Back to home page then press below home button</span></p>
             
             <a <span style="color:blue;" href="logout.php">Home</span></a>
        </center>
    </body>
</html>