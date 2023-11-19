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

#customers tr:nth-child(even){background-color:  #f2f2f2;}
#customers tr:nth-child(odd){background-color:  #f2f2f2;}
#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: black;
  color: white;
}
.block {
  display: block;
  width: 100%;
  border: none;
  background-color: black;
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
$result=$con->query("SELECT * FROM teacher_login3");

echo "<table border='1'  id='customers'>

<tr>
<th>username</th>
<th>amount</th>
<th>city</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
  echo "<tr>";
  echo "<td>".$row['username']."</td>";
  echo "<td>".$row['amount']."</td>";
  echo "<td>".$row['city']."</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
 <center><br><br>
             
             
             <a href="logout1.php">logout</a>
        
               
              </center>
            
       
    

</body>
</html>

