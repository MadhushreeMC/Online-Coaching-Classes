<html>
<body>
<head>
<title>video tests</title>
</head>
<h5>video list:</h5>
<ul>
<?php
$filelist=scandir("Uploads/videos");
foreach($filelist as $key=>$video){
if($key >1){
echo '<li><a href="page2.php?video='.$key.' " >'.$video.'</a></li>';
}
}
?>
</ul>
</br>
<center>
        
             
             <a <span style="color:black;" href="logout3.php">Logout</span></a>
        </center>
</body>
</html>