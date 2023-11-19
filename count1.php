<html>
    <head>
        <title>CONTACT INFORMATION</title>
        
        
    
    
    
     <center>
         <h1>Contact Information</h1>
    </center>

<style>

table
{
   border-style-solid
    margin-top: 15px;
    height: 150px;
    width: 600px;
    border-color:pink;
    
}

</style>
</head>
<body bgcolor="#EEFDEF">

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
$result=$con->query("SELECT teachername, email,subject, phonenumber  FROM teacher_login1");

echo "<center><table border='1'></center>

<tr>
<th>teachername</th>
<th>email</th>
<th>subject</th>
<th>phonenumber</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
  echo "<tr>";
  echo "<td>".$row['teachername']."</td>";
  echo "<td>".$row['email']."</td>";
  echo "<td>".$row['subject']."</td>";
  echo "<td>".$row['phonenumber']."</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
<center><br><br>
        
             
             <a <span style="color:black;" href="logout.php">Home</span></a>
        </center>

</body>
</html>

