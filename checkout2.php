<!DOCTYPE html>
        <html>
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <title> adding page</title>
                <link rel="stylesheet" type="text/css" href="stylesheet10.css">
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
                     $username= mysqli_real_escape_string($con,$_POST['username']);
                    $amount = mysqli_real_escape_string($con,$_POST['amount']);
                   $password = mysqli_real_escape_string($con,$_POST['password']);
                   $city = mysqli_real_escape_string($con,$_POST['city']);
                     
                     
                   if($username!="" &&  $amount!="" && $password!="" && $city!="" )
                   {
                     $sql= "INSERT INTO teacher_login3(username,amount,password,city) VALUES('$username','$amount', '$password', '$city')";
                     mysqli_query($con, $sql);
                     //$result = mysqli_query($con, $sql);
            
                      $_SESSION['username']= $username;
                    
                    echo"<script>alert('your payment is done');</script>";  
                     header('location:admin1.php');
                   }
 }                
                ?>
            </head>
            <body>
                <form class="" action="checkout2.php" method="post">
                 <div class="row">
                 <div class="col-75">
                    <div class="container">
                       <h3> Address</h3>
            <label for="username"><i class="fa fa-user"></i> username</label>
            <input type="text"  name="username" placeholder="username" value="" required>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$"  name="email" placeholder="email" value="" required>
            
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text"  name="city" placeholder="city" value="" required>
                <div class="row">
              <div class="col-50">
                <label for="password">Password</label>
                <input type="text"  name="password" placeholder="password" value="" required>
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text"  pattern="^\d{6}$"  name="zip" placeholder="zip" value="" required>
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname"></label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="amount">amount</label>
            <input type="3000"  pattern="^\d{4}$" name="amount" placeholder="3000" value="3000" required>
            <label for="ccnum">Credit card number</label>
            <input type="text" pattern="^\d{16}$" name="cardnumber" placeholder="enter your 16 digit number" value="" required>
            
            <div class="row">
              <div class="col-50">
               <form>
                <label >Expiry MM/YY: </label>
                <select id="expiryMonth">         
                 <option selected>Month </option>
                 <option value="January"> 01 </option>
                  <option value="February"> 02 </option>
                   <option value="March"> 03 </option>
                    <option value="April"> 04 </option>
                     <option value="May"> 05 </option>
                     <option value="June"> 06 </option>
                     <option value="July"> 07 </option>
                     <option value="August"> 08 </option>
                      <option value="September"> 09 </option>
                       <option value="October"> 10 </option>
                        <option value="November"> 11 </option>
                         <option value="December"> 12 </option>
                        </select>
                       <select id="expiryYear">
                        <option selected>Year</option>
                        <option value="2020"> 2020 <option>
                        <option value="2021"> 2021 <option>
                       <option value="2022"> 2022<option>
                      <option value="2023"> 2023 <option>
                      <option value="2024"> 2024 <option>
                      <option value="2025"> 2025 <option>
                     <option value="2026"> 2026<option>
                    <option value="2027"> 2027 <option>
                    <option value="2028"> 2028 <option>
                    <option value="2029"> 2029 <option>
                    <option value="2030"> 2030 <option>
                   </select><br>
                  <span id="expiryMonthError"> </span>
                  <span id="expiryYearError"> </span>
                  </form> <br>
                       
                        



              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text"  pattern="^\d{4}$"  name="cvv" placeholder="cvv" required>
              </div>
            </div>
          </div>

        </div>
       
        <button type="submit" class="btn" name="log">pay</button>
      </form>
    </div>
  </div>

 
</div>

                        
                  <br><br><br> <center><br>
        
             
             <a <span style="color:blue;" href="logout4.php">Logout</span></a>
        </center>
            </body>
        </html>