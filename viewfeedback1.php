<html>
<head>
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}
#customers tr:nth-child(odd){background-color: #f2f2f2;}
#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
.block {
  display: block;
  width: 100%;
  border: none;
  background-color: #4CAF50;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
}

.block:hover {
  background-color: #ddd;
  color: black;
}
</style>
  <meta charset="UTF-8">
  <title>Feedback</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  

</head>
<body bgcolor="white">
<form action = "logout2.php" method="POST"> 
          <div class="w3-show-inline-block">
          <div class="w3-bar">
            <center>
              <input type="submit" value="LogOut" name="logout" class="w3-btn w3-black">
            </center>
        </div>

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
$result=$con->query("SELECT * FROM teacher_login2");

echo "<table border='1' id='customers'>

<tr>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Feedback</th>
<th>Suggestions</th>



</tr>";
while($row = mysqli_fetch_array($result))
{
  echo "<tr>";
  echo "<td>".$row['name']."</td>";
  echo "<td>".$row['email']."</td>";
   echo "<td>".$row['phone']."</td>";
  echo "<td>".$row['feedback']."</td>";
   echo "<td>".$row['suggestions']."</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>

       
    

</body>
</html>

