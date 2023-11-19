<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM employee");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Delete  data</title>
</head>
<body>
<table>
	<tr>
	<td>teachername</td>
	<td>email</td>
	<td>subject</td>
	<td>phonenumber</td>
	
	<td>Action</td>
	</tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
	<td><?php echo $row["teachername"]; ?></td>
	<td><?php echo $row["email"]; ?></td>
	<td><?php echo $row["subject"]; ?></td>
	<td><?php echo $row["phonenumber"]; ?></td>
	
	<td><a href="delete-process.php?userid=<?php echo $row["teachername"]; ?>">Delete</a></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>
</body>
</html>