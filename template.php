<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="styles/stylesheet.css" />
    </head>
    <body>
        <div id="wrapper">
            <div id="banner">
                
            </div
            <nav id="navigation">
                <ul id="nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">A.Login</a></li>
                    <li><a href="#">T.Login</a></li>
                    <li><a href="#">Register</a></li>
                    <li><a href="#">subjects</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                
            </nav>
            <div id="content_area">
                <?php echo $content; ?>
            </div>  
        </div>
       
    </body>
</html>
