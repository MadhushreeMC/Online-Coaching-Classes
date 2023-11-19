<?php
session_start();
$servername="localhost";
$username="";

$password="";
$db="coachingclases";
$errors=array();
// connect to the database
$con= mysqli_connect("localhost", "root","", "coachingclases");


if(isset($_POST['login']))
{
    $username = mysqli_real_escape_string($con,$_POST['username']);
        $password= mysqli_real_escape_string($con,$_POST['password']);
          if($username!="" &&  $password!="")
                   {
                     $sql="SELECT id FROM teacher_login WHERE username='$username' and password='$password'";
                     $result=mysqli_query($con,$sql);
                     $row= mysqli_fetch_array($result,MYSQLI_ASSOC);
                     $count=mysqli_num_rows($result);
                     if($username!=$password)
                     {
                         echo"<script>alert('username and password not match');</script>";
                     }
                     if($count==1)
                    {
                        header("location:hellouser.php");
                    }
                }
}