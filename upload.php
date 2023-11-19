
<?php 

$name= $_FILES['file']['name'];

$tmp_name= $_FILES['file']['tmp_name'];

$position= strpos($name, ".");

$fileextension= substr($name, $position + 1);

$fileextension= strtolower($fileextension);


if (isset($name)) {

$path= 'Uploads/videos/';
if (empty($name))
{
echo "Please choose a file";
}
else if (!empty($name)){
if (($fileextension !== "mp4") && ($fileextension !== "ogg") && ($fileextension !== "webm"))
{
echo "The file extension must be .mp4, .ogg, or .webm in order to be uploaded";
}


else if (($fileextension == "mp4") || ($fileextension == "ogg") || ($fileextension == "webm"))
{
if (move_uploaded_file($tmp_name, $path.$name)) {
echo 'Uploaded!';
}
}
}
}
?>

<?php

if (($fileextension == "mp4") || ($fileextension == "ogg") || ($fileextension == "webm"))
{
echo "<video width='320' controls>
<source src='$path/$name' type='video/$fileextension'>
Your browser does not support the video tag.
</video>";

}

?>
?>
<html>
<head>
</head>
<body>
<center>
 <p class="para-1"><span style="color:white;">If You Want To GO Back to home page then press below home button</span></p>
             
             <a <span style="color:blue;" href="logout2.php">Logout</span></a>
        </center>
            </body>
        </html>
