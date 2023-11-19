<html>
<body>
<?php
$current_video = $_GET['video'];
$filelist=scandir("Uploads/videos");
foreach($filelist as $key=>$video){
if($key >1){
if($key==$current_video){
$current_video_src = $video;
$next_video = $key+1;
$previous_video = $key-1;
}
}
}
?>
<center>
<video id="MyVideo" width="720" height="480" controls autoplay>
<source src="Uploads/videos/<?php echo $current_video_src; ?>" type="video/mp4">
</video>
<a href="page2.php?video=<?php echo $previous_video; ?>" >Previous</a>
<a href="page2.php?video=<?php echo $next_video; ?>" >Next</a>
</center>
</body>
</html>


<!DOCTYPE html>
<html>
<body>
<p>
<center>
If you have any doubt regarding this vedio then you can mail.<br>
this is an email link:<br>
<a href="mailto:?
subject=hello%20again" target="_top">send mail</a>
</p>
</center>
<center>
        
             
             <a <span style="color:black;" href="logout3.php">Logout</span></a>
        </center>
</body>
</html>