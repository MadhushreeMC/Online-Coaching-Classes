
<?php include('server.php');
if(empty($_SESSION['username'])){
    header('location: login.php');
}
    ?>
<!DOCTYPE html>
<html>
    <head>
        <title>User registration system </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header">
            <h2>home page</h2>
        </div>
       <div class="content"> 
           <?php if(isset($_SESSION['success'])): ?>
           <div class="error success">
               <h3> 
                   <?php
                   echo $_SESSION['success'];
                   echo$_SESSION['success'];
                   ?>
               </h3>
           </div>
           <?php endif ?>
           <?php if(isset($_SESSION["usernane"])): ?> 
           <p>welcome<strong><?php echo $_SESSION['username']; ?></strong></p>
           <p><a href="reg1.php?logout='1'" style="color:red;">logout</a></p>
            <?php endif ?>
       </div>
    </body>
       </html>