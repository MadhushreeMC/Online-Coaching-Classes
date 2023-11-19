<?php
session_start();
$servername="localhost";
$username="";
$email="";
$password="";
$db="coachingclases";
$errors=array();

// connect to the database
$con= mysqli_connect("localhost", "root","", "coachingclases");




// if the register button is clicked
if(isset($_POST['register']))
{
    $username = mysqli_real_escape_string($con,$_POST['username']);
     $email = mysqli_real_escape_string($con,$_POST['email']);
       
   
    
     $place = mysqli_real_escape_string($con,$_POST['place']);
      
     
   
        $password_1= mysqli_real_escape_string($con,$_POST['password_1']);
         $password_2= mysqli_real_escape_string($con,$_POST['password_2']);
         
         //ensure that form fields are filled properly
         if(empty($username))
         {
             array_push($errors, "Username is required");
         } //ensure that form fields are filled properly
              
        
          if(empty($email))
         {
             array_push($errors, "Email is required");
         } 

        if(empty($place))
         {
             array_push($errors, "place is required");
         } 
                    
          if(empty($password_1))
         {
             array_push($errors, "password is required");
         } 
         if($password_1 != $password_2)
         {
             array_push($errors, "The two password do not match");
         } 
         // if there are no errors, save user to database
         if(count($errors)==0)
         {
             //$password = md5($password_1); //encrypt password before storing in database(security)
             $sql= "INSERT INTO users(username, email, place, password) VALUES('$username', '$email', '$place', '$password_1')";
             mysqli_query($con, $sql);
             //$result = mysqli_query($con, $sql);
            
            $_SESSION['username']= $username;
          
            header('location:checkout2.php');
    
             
         }
}
if(isset($_POST['login'])){
    
     $username = mysqli_real_escape_string($con,$_POST['username']);
     $password= mysqli_real_escape_string($con,$_POST['password']);
         
         //ensure that form fields are filled properly
         if(empty($username))
         {
             array_push($errors, "username is required");
         }
          if(empty($password))
         {
             array_push($errors, "password is required");
         }
         if(count($errors)==0){
            // $password=md5($password);
             $query="SELECT * FROM teacher_login3 WHERE username='$username' AND password='$password'";
             // mysqli_query($con, $query);
             $result=mysqli_query($con,  $query);
             if(mysqli_num_rows($result)==1){
                // $_SESSION['username']=$username;
                  header('location:admin1.php');
         }else{
             array_push($errors, "wrong username/password combination");
         }
            
         }
          

}
?>
