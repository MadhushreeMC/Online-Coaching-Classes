<!DOCTYPE html>
        <html>
            <head>
                  <title> adding page</title>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elegant Feedback Form  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
                
               <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
                <link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
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
                      $name = mysqli_real_escape_string($con,$_POST['name']);
                     $onWhichVideo = mysqli_real_escape_string($con,$_POST['onWhichVideo']);
                    $email = mysqli_real_escape_string($con,$_POST['email']);
  
                     $phone = mysqli_real_escape_string($con,$_POST['phone']);
                      $feedback = mysqli_real_escape_string($con,$_POST['feedback']);
                     $suggestions = mysqli_real_escape_string($con,$_POST['suggestions']);
                   if($name!="" && $onWhichVideo!="" &&  $email!="" &&  $phone!="" && $feedback!="" && $suggestions!="")
                   {
                     $sql= "INSERT INTO teacher_login2(name,onWhichVideo,email, phone,feedback,suggestions) VALUES('$name','$onWhichVideo','$email', '$phone', '$feedback','$suggestions')";
                     mysqli_query($con, $sql);
                     //$result = mysqli_query($con, $sql);
            
                      $_SESSION['name']= $name;
                    
                    echo"<script>alert('Thank You..! Your Feedback is Valuable to Us');</script>";  
                    
                   }
 }                
                ?>
            </head>
              <body class="agileits_w3layouts">
            <h1 class="agile_head text-center">Feedback Form</h1>
               <div class="w3layouts_main wrap">
                 <h3>Please help us to serve you better by taking a couple of minutes. </h3>
                <form class="agile_form" action="poll.php" method="post">
                  
                    <div class="container">
                      
                       
                         <h2>How satisfied were you with our Service?</h2>
	              
                          <ul class="agile_info_select">
                           <li><input type="radio" name="feedback" value="excellent" id="excellent" required> 
				 	  <label for="excellent">excellent</label>
				      <div class="check w3"></div>
				 </li>
				 <li><input type="radio" name="feedback" value="good" id="good"> 
					  <label for="good"> good</label>
				      <div class="check w3ls"></div>
				 </li>
				 <li><input type="radio" name="feedback" value="neutral" id="neutral">
					 <label for="neutral">neutral</label>
				     <div class="check wthree"></div>
				 </li>
				 <li><input type="radio" name="feedback" value="poor" id="poor"> 
					  <label for="poor">poor</label>
				      <div class="check w3_agileits"></div>
				 </li>
                                  </ul>
                         <input type="text" name="name" placeholder="name" value="" required>
                         <input type="text" name="onWhichVideo" placeholder="onWhichVideo" value="" required>
                        <input type="email" pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$" name="email" placeholder="email" value="" required>
                       
                        <input type="phone" pattern="^\d{10}$" name="phone"  placeholder="phone" value="" required>
                       
                         
                           <textarea placeholder="suggestions"  name="suggestions" class="w3l_summary" value="" required></textarea>
                          <center>
                        <button type="submit" class="btn" name="log">submit</button>
                         </center>
                    </div> 
                   </div>
                </form>
                   <center>
       
             
             <a <span style="color:blue;" href="logout3.php">Logout</span></a>
        </center>
            </body>
        </html>