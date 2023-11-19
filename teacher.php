
<?php include('server1.php'); ?>
<!DOCTYPE html>
<html>
    <head>
         <meta charset="UTF-8">
         <title>teacher login page</title>
          <link rel="stylesheet" type="text/css" href="stylesheet4.css">
    </head>
    
    <body>
        <div class="header">
            <h2>teacher login form</h2>
        </div>
        <button
            onclick="document.getElementById('id01').style.display='block'"
            style="width:auto;">log</button>
            <div id="id01" class="modal">
            <form class="modal-content animate" action="teacher_login.php" method="post"> 
                <div class="imgcontainer">
                    <span
                        onclick="document.getElementById('id01').style.display='none'" class="close" title="close modal">&times;</span>
                        <img src="img_avatar2.png"
                             alt="avatar" class="avatar">
                </div>
                <div class="container">
                    <label for="username"><b>username</b>
                    </label>
                    <input type="text"  placeholder=" enter username" name="username" required value="">
                    <label for="password"><b>password</b>
                    </label>
                    <input type="password" 
                           placeholder="enter  password" name="password" required value="">
                    <button type="submit">Login</button>
                    <label>
                        <input type="checkbox" checked="checked" name="remember">
                        remember me
                    </label>
                </div>
                <div class="container"
                    style="background-color:#f1f1f1">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'"
                        class="cancelbtn">cancel</button>
                        <span class="password">Forgot<a href="#">password?</a></span>
                       
                </div>
              </form>
            </div>
        <script>
        var modal=document.getElementById('id01);
            window.onclick=function(event) {
                if(event.target==modal) {
                    modal.style.display="none";
                }
            }
        </script>
    </body>
</html>