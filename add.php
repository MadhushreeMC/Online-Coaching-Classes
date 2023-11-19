<?php
 include('addteacher.php');
session_start();
$servername="localhost";
$username="";

$password="";
$db="coachingclases";
$errors=array();
// connect to the database
$con= mysqli_connect("localhost", "root","", "coachingclases");

// if the register button is clicked
if(isset($_POST['register']))
{
    $username = mysqli_real_escape_string($con,$_POST['username']);
     
      
   
        $password_1= mysqli_real_escape_string($con,$_POST['password']);
         
         
         //ensure that form fields are filled properly
         if(empty($username))
         {
             array_push($errors, "Username is required");
         } //ensure that form fields are filled properly
        
          
          if(empty($password))
         {
             array_push($errors, "password is required");
         } 
         if($username != $password)
         {
             array_push($errors, "The two password do not match");
         } 
         // if there are no errors, save user to database
         if(count($errors)==0)
         {
             //$password = md5($password_1); //encrypt password before storing in database(security)
             $sql= "INSERT INTO teacher_login(username, password) VALUES('$username',  '$password')";
             mysqli_query($con, $sql);
             //$result = mysqli_query($con, $sql);
            
            $_SESSION['username']= $username;                        
         }
}
?>