<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>User registration system </title>
        <link rel="stylesheet" type="text/css" href="style3.css">
    </head>
    <body>
        <div class="header">
            <h2>Register form</h2>
        </div>
        <form method="post" action="register.php">
            <!-- display validation errors here -->
            <?php include('errors.php'); ?>
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" value="<?php echo $username; ?>">
            </div> 
             <div class="input-group">
                <label>Email</label>
                <input type="email" pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$" name="email"  value="<?php echo $email; ?>">
            </div> 
             <div class="input-group">
                <label>place</label>
                <input type="text" name="place"  value="">
            </div> 
             <div class="input-group">
                <label>Password</label>
                <input type="password" name="password_1">
            </div> 
             <div class="input-group">
                <label>Confirm Password</label>
                <input type="password" name="password_2">
            </div> 
             <div class="input-group">
                 <button type="submit" name="register" class="btn">Register</button>
            </div> 
            <p>
                Already a member? <a href="login.php">Sign in</a>
            </p>
              
        </form>
       <center>
        <p class="para-1"><span style="color:white;">If You Want To GO Back to home page then press below home button</span></p>
             
             <a <span style="color:blue;" href="logout.php">Home</span></a>
        </center>
    </body>
</html>