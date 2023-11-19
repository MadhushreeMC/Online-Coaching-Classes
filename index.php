<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="styles/stylesheet.css"/>
    </head>
    <body>
        <?php
        $title= "Home";
        $content="";
        ?>
        <div id="wrapper">
            <div id="banner">
            </div>
            <nav id="navigation">
                <ul id="nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="admin_login.php">A.Login</a></li>
                    <li><a href="teacher_login.php">T.Login</a></li>
                    <li><a href="register.php">Register</a></li>
                    <li><a href="subject.php">Subject</a></li>
                    <li><a href="count1.php">Contacts</a></li>
                    <li><a href="page1.php">Demovideo</a></li>
                </ul>
            </nav>
      
            <div id="content_area">
                
                <div class="imgCenter">
                 
                    <?php echo $content; ?>
                </div> 
            </div>
        </div>
    </body>
    
</html>
